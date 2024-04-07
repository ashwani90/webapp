<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;

class MainController extends Controller
{
    public function index(Request $request) {
        $small_title = "OUR IDENTITY";
        $title = "We cultivate bright futures by blending innovation with shared expertise";
        $desc = "We assist our clients in resolving challenges by seamlessly integrating technological solutions into their business processes. ";
        $image = "./img/images/grow_with_us.jpg";
        $button_text = "Connect with us";
        $button_link = "";
        $data = [
            "small_title" => $small_title,
            "title" => $title,
            "desc" => $desc,
            "image" => $image,
            "button_text" => $button_text,
            "button_link" => $button_link,
        ];
        return view('web.index', ['data' => $data]);

    }

    public function philosophy(Request $request) {
        return response()->view('web/philosophy');
    }
    public function product(Request $request) {
        $small_title = "Customized Chatbot";
        $title = "Chatbots: Powering Business Conversations Forward";
        $desc = "Introducing the catalyst for dynamic business communication: Chatbots. With their unparalleled ability to engage customers, streamline operations, and drive growth, Chatbots are revolutionizing the way businesses interact. Our cutting-edge solutions harness the power of Chatbots to propel conversations forward, empowering enterprises to connect effortlessly with their audience. Whether it's handling customer inquiries, automating tasks, or providing personalized assistance, our Chatbots deliver unmatched efficiency and effectiveness. Embrace the future of business communication and unlock new possibilities with Chatbots as your strategic ally. Elevate your brand, enhance customer satisfaction, and drive success with Chatbots leading the way. ";
        $image = "./img/images/products_head.jpg";

        $button_text = "Get to know more";
        $button_link = "";
        $head_image_title = "What We Do / Product";
        $head_large = "Customized Chatbot";
        $subhead_image = "Enhancing Dialogue, Transforming Productivity";
        $image2 = "./img/ai_for/chatbot-3.webp";
        $data = [
            "small_title" => $small_title,
            "title" => $title,
            "desc" => $desc,
            "image" => $image,
            "button_text" => $button_text,
            "button_link" => $button_link,
            'head_image_title' => $head_image_title,
            'head_large' => $head_large,
            'subhead_image' => $subhead_image,
            'headimage' => $image2,
        ];
        return view('web.product', ['data' => $data]);
    }
    public function products(Request $request) {
        $head_image_title = "What We Do / Products";
        $head_large = "Our Products";
        $subhead_image = "Innovative Solutions, Enriching Experiences";
        $image = "./img/images/products_head.jpg";
        $data = [
            'head_image_title' => $head_image_title,
            'head_large' => $head_large,
            'subhead_image' => $subhead_image,
            'headimage' => $image,
        ];
        return response()->view('web/products', ['data' => $data]);
    }
    public function services(Request $request) {
        $head_image_title = "What We Do / Services";
        $head_large = "Our Services";
        $subhead_image = "Empowering Innovation, Amplifying Success";
        $image = "./img/images/ai_product30.jpg";
        $newsletter_head = "Accessible at your Convenience";
        $newsletter_desc = "We are equipped to support you with comprehensive software solutions tailored to your needs";
        $newsletter_image = "./img/images/ai_product21.jpg";
        $data = [
            'head_image_title' => $head_image_title,
            'head_large' => $head_large,
            'subhead_image' => $subhead_image,
            'headimage' => $image,
            'newsletter_head' => $newsletter_head,
            'newsletter_desc' => $newsletter_desc,
            'newsletter_image' => $newsletter_image,
        ];
        return response()->view('web/services', ['data' => $data]);
    }
    public function service(Request $request, $slug) {
        $pages = DB::table('pages')->where('page_name', 'service/'.$slug)->get();
        $page = $pages[0];
        $content = $pages[0]->content;
        $items = explode("|", $content);
        $data = $this->get_data($items);
        $capabilities = DB::table('dynamic_content')->where('page_id', $page->id)->get()->toArray();
        $caps = [];
        for ($i=0;$i<count($capabilities);$i++) {
            array_push($caps, [
                'description' => $capabilities[$i]->description,
                'head' => $capabilities[$i]->head,
                'type' => $capabilities[$i]->type,
                'image' => env("APP_URL", "somedefaultvalue") . $capabilities[$i]->image,
            ]);
        }
        return response()->view('web/service', ['data' => $data, 'capabilities' => $caps]);
    }
    public function get_data($items) {
        $data = [];
        for ($i=0;$i<count($items);$i++) {
            $item = explode(":", $items[$i]);
            // print_r($item);
            if (str_contains($item[1], 'img')) {
                $data[$item[0]] = env("APP_URL", "somedefaultvalue"). $item[1];
            } else {
                $data[$item[0]] = $item[1];
            }

        }
        return $data;
    }
}
