<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use BinshopsBlog\Laravel\Fulltext\Search;
use BinshopsBlog\Models\BinshopsCategoryTranslation;
use BinshopsBlog\Captcha\UsesCaptcha;
use BinshopsBlog\Middleware\DetectLanguage;
use BinshopsBlog\Models\BinshopsCategory;
use BinshopsBlog\Models\BinshopsLanguage;
use BinshopsBlog\Models\BinshopsPost;
use BinshopsBlog\Models\BinshopsPostTranslation;
use Auth;
use BinshopsBlog\Models\BinshopsComment;
use BinshopsBlog\Events\CommentAdded;

class BinshopController extends Controller
{
    use UsesCaptcha;

    public function __construct()
    {
        $this->middleware(DetectLanguage::class);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($locale = null, Request $request, $category_slug = null)
    {
        $category = $request->input("category");
        if ($category) {
            $category_slug = $category;
        }
        $head_image_title = "Education / Key learnings";
        $head_large = "Articles";
        $subhead_image = "Elevating Insights / Empowering Employees";
        $image = "http://localhost:8000/img/images/ai_product30.jpg";
        $newsletter_head = "Accessible at your Convenience";
        $newsletter_desc = "We are equipped to support you with comprehensive software solutions tailored to your needs";
        $newsletter_image = "./img/images/ai_product21.jpg";
        $service_intro_head = "How People Benefit from AI. How AI Relies on People";
        $service_intro_desc = "The emergence of generative AI marks a significant advancement beyond conventional machine learning and AI models. It expands beyond mere recognition and reasoning intelligence to cultivate an operational intelligence that collaborates with humans, enhancing productivity and facilitating informed decision-making at all levels. Powered by cloud technology, this fusion of AI capabilities presents limitless possibilities and opens doors to new opportunities, empowering organizations to innovate and thrive in today's dynamic landscape";
        $service_intro_image = env("APP_URL", "somedefaultvalue") . "/img/images/business.jpg";
        $data = [
            'head_image_title' => $head_image_title,
            'head_large' => $head_large,
            'subhead_image' => $subhead_image,
            'headimage' => $image,
            'newsletter_head' => $newsletter_head,
            'newsletter_desc' => $newsletter_desc,
            'newsletter_image' => $newsletter_image,
            "service_into_head" => $service_intro_head,
            "service_intro_desc" => $service_intro_desc,
            "service_intro_image" => $service_intro_image
        ];
        $title = 'Blog Page'; // default title...

        $categoryChain = null;
        $posts = array();
        if ($category_slug) {
            $category = BinshopsCategoryTranslation::where("slug", $category_slug)->with('category')->firstOrFail()->category;
            $categoryChain = $category->getAncestorsAndSelf();
            $posts = $category->posts()->where("binshops_post_categories.category_id", $category->id)->with([ 'postTranslations' => function($query) use ($request){
                $query->where("lang_id" , '=' , $request->get("lang_id"));
            }
            ])->get();

            $posts = BinshopsPostTranslation::join('binshops_posts', 'binshops_post_translations.post_id', '=', 'binshops_posts.id')
                ->where('lang_id', $request->get("lang_id"))
                ->where("is_published" , '=' , true)
                ->where('posted_at', '<', Carbon::now()->format('Y-m-d H:i:s'))
                ->orderBy("posted_at", "desc")
                ->whereIn('binshops_posts.id', $posts->pluck('id'))
                ->paginate(config("binshopsblog.per_page", 12));

            // at the moment we handle this special case (viewing a category) by hard coding in the following two lines.
            // You can easily override this in the view files.
            \View::share('binshopsblog_category', $category); // so the view can say "You are viewing $CATEGORYNAME category posts"
            $title = 'Posts in ' . $category->category_name . " category"; // hardcode title here...
            $featured_posts = [];
        } else {
            $posts = BinshopsPostTranslation::join('binshops_posts', 'binshops_post_translations.post_id', '=', 'binshops_posts.id')
                ->where('lang_id', $request->get("lang_id"))
                ->where("is_published" , '=' , true)
                ->where('posted_at', '<', Carbon::now()->format('Y-m-d H:i:s'))
                ->orderBy("posted_at", "desc")
                ->paginate(config("binshopsblog.per_page", 12));
                $featured_posts = BinshopsPostTranslation::join('binshops_posts', 'binshops_post_translations.post_id', '=', 'binshops_posts.id')
                ->where('lang_id', $request->get("lang_id"))
                ->where("is_published" , '=' , true)
                ->where('posted_at', '<', Carbon::now()->format('Y-m-d H:i:s'))
                ->orderBy("seo_title", "desc")
                ->limit(5)->get();
        }

        //load category hierarchy
        $rootList = BinshopsCategory::roots()->get();
        BinshopsCategory::loadSiblingsWithList($rootList);

        return view("binshopsblog::index", [
            'lang_list' => BinshopsLanguage::all('locale','name'),
            'locale' => $request->get("locale"),
            'lang_id' => $request->get('lang_id'),
            'category_chain' => $categoryChain,
            'categories' => $rootList,
            'posts' => $posts,
            'featured_posts' => $featured_posts,
            'title' => $title,
            'routeWithoutLocale' => $request->get("routeWithoutLocale"),
            'data' => $data
        ]);
    }

    public function viewSinglePost(Request $request)
    {
        $head_image_title = "Education / Key learnings";
        $head_large = "Articles";
        $subhead_image = "Elevating Insights / Empowering Employees";
        $image = "http://localhost:8000/img/images/ai_product30.jpg";
        $newsletter_head = "Accessible at your Convenience";
        $newsletter_desc = "We are equipped to support you with comprehensive software solutions tailored to your needs";
        $newsletter_image = "./img/images/ai_product21.jpg";
        $service_intro_head = "How People Benefit from AI. How AI Relies on People";
        $service_intro_desc = "The emergence of generative AI marks a significant advancement beyond conventional machine learning and AI models. It expands beyond mere recognition and reasoning intelligence to cultivate an operational intelligence that collaborates with humans, enhancing productivity and facilitating informed decision-making at all levels. Powered by cloud technology, this fusion of AI capabilities presents limitless possibilities and opens doors to new opportunities, empowering organizations to innovate and thrive in today's dynamic landscape";
        $service_intro_image = env("APP_URL", "somedefaultvalue") . "/img/images/business.jpg";
        $data = [
            'head_image_title' => $head_image_title,
            'head_large' => $head_large,
            'subhead_image' => $subhead_image,
            'headimage' => $image,
            'newsletter_head' => $newsletter_head,
            'newsletter_desc' => $newsletter_desc,
            'newsletter_image' => $newsletter_image,
            "service_into_head" => $service_intro_head,
            "service_intro_desc" => $service_intro_desc,
            "service_intro_image" => $service_intro_image
        ];
        $blogPostSlug = $request->route('blogPostSlug');
        $recent_posts = BinshopsPostTranslation::join('binshops_posts', 'binshops_post_translations.post_id', '=', 'binshops_posts.id')
                ->where('lang_id', $request->get("lang_id"))
                ->where("is_published" , '=' , true)
                ->where('posted_at', '<', Carbon::now()->format('Y-m-d H:i:s'))
                ->orderBy("posted_at", "desc")
                ->limit(5)->get();

        // the published_at + is_published are handled by BinshopsBlogPublishedScope, and don't take effect if the logged in user can manage log posts
        $blog_post = BinshopsPostTranslation::join('binshops_posts', 'binshops_post_translations.post_id', '=', 'binshops_posts.id')
        ->where([
            ["slug", "=", $blogPostSlug],
            ['lang_id', "=" , $request->get("lang_id")]
        ])->firstOrFail();
        if ($captcha = $this->getCaptchaObject()) {
            $captcha->runCaptchaBeforeShowingPosts($request, $blog_post);
        }

        $categories = $blog_post->post->categories()->with([ 'categoryTranslations' => function($query) use ($request){
            $query->where("lang_id" , '=' , $request->get("lang_id"));
        }
        ])->get();
        return view("binshopsblog::single_post", [
            'post' => $blog_post,
            // the default scope only selects approved comments, ordered by id
            'comments' => $blog_post->post->comments()
                ->with("user")
                ->get()->reverse(),
            'captcha' => $captcha,
            'categories' => $categories,
            'locale' => $request->get("locale"),
            'routeWithoutLocale' => $request->get("routeWithoutLocale"),
            'data' => $data,
            'recent_posts' => $recent_posts,
        ]);
    }

    public function addNewComment(Request $request, $locale, $blog_post_slug)
    {

        if (config("binshopsblog.comments.type_of_comments_to_show", "built_in") !== 'built_in') {
            throw new \RuntimeException("Built in comments are disabled");
        }

        $post_translation = BinshopsPostTranslation::where("slug", $blog_post_slug)
            ->with('post')
            ->firstOrFail();
        $blog_post = $post_translation->post;

        /** @var CaptchaAbstract $captcha */
        $captcha = $this->getCaptchaObject();
        if ($captcha) {
            $captcha->runCaptchaBeforeAddingComment($request, $blog_post);
        }

        $new_comment = $this->createNewComment($request, $blog_post);
        return redirect()->route('binshopsblog.single', ['locale' => $locale, 'blogPostSlug' => $blog_post_slug]);
    }

    protected function createNewComment(Request $request, $blog_post)
    {
        $new_comment = new BinshopsComment($request->all());

        if (config("binshopsblog.comments.save_ip_address")) {
            $new_comment->ip = $request->ip();
        }
        if (config("binshopsblog.comments.ask_for_author_website")) {
            $new_comment->author_website = $request->get('author_website');
        }
        if (config("binshopsblog.comments.ask_for_author_email")) {
            $new_comment->author_email = $request->get('author_email');
        }
        if (config("binshopsblog.comments.save_user_id_if_logged_in", true) && Auth::check()) {
            $new_comment->user_id = Auth::user()->id;
        }

        $new_comment->approved = config("binshopsblog.comments.auto_approve_comments", true) ? true : false;

        $blog_post->comments()->save($new_comment);

        event(new CommentAdded($blog_post, $new_comment));

        return $new_comment;
    }
}
