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

    public function contact(Request $request) {
        $small_title = "Customized Chatbot";
        $title = "Chatbots: Powering Business Conversations Forward";
        $desc = "Introducing the catalyst for dynamic business communication: Chatbots. With their unparalleled ability to engage customers, streamline operations, and drive growth, Chatbots are revolutionizing the way businesses interact. Our cutting-edge solutions harness the power of Chatbots to propel conversations forward, empowering enterprises to connect effortlessly with their audience. Whether it's handling customer inquiries, automating tasks, or providing personalized assistance, our Chatbots deliver unmatched efficiency and effectiveness. Embrace the future of business communication and unlock new possibilities with Chatbots as your strategic ally. Elevate your brand, enhance customer satisfaction, and drive success with Chatbots leading the way. ";
        $image = "./img/images/products_head.jpg";

        $button_text = "Get to know more";
        $button_link = "";
        $head_image_title = "Get in Touch / Contact US";
        $head_large = "Connect Now";
        $subhead_image = "Your Guide to Finding Solutions: Let Us Connect You with the Right Experts";
        $image2 = "./img/images/contact.jpg";
        $service_intro_head = "Let's Connect! Reach Out and Let's Start a Conversation Today";
        $service_intro_desc = "At Jkinda, we specialize in delivering top-notch services such as custom AI development and software development tailored to your unique business needs. Whether you're looking to implement cutting-edge AI solutions or create bespoke software applications, we're here to help. With a commitment to personalized yet professional service, we're just one call away. Our dedicated team is ready to provide expert guidance and support to help your business grow and expand. Don't hesitate to reach out – let's work together to turn your vision into reality and drive success for your business.";
        $service_intro_image = env("APP_URL", "somedefaultvalue") . "/img/images/business.jpg";
        $newsletter_head = "Stay Informed, Stay Inspired: Subscribe Today";
        $newsletter_desc = "Receive exclusive updates, insights, and inspiration straight to your inbox by subscribing to our newsletter today";
        $newsletter_image = "./img/images/ai_product2.jpg";
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
            "service_intro_head" => $service_intro_head,
            "service_intro_desc" => $service_intro_desc,
            "service_intro_image" => $service_intro_image,
            'newsletter_head' => $newsletter_head,
            'newsletter_desc' => $newsletter_desc,
            'newsletter_image' => $newsletter_image,
        ];
        return response()->view('web/contact', ['data' => $data]);
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

    public function blogs(Request $request) {
        $head_image_title = "Education / Key learnings";
        $head_large = "Articles";
        $subhead_image = "Elevating Insights / Empowering Employees";
        $image = "./img/images/ai_product30.jpg";
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
        return response()->view('web/blogs', ['data' => $data]);
    }

    public function blog(Request $request) {
        $head_image_title = "Education / Key learnings";
        $head_large = "Articles";
        $subhead_image = "Elevating Insights / Empower Employees";
        $image = "./img/images/ai_product30.jpg";
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
        return response()->view('web/blog', ['data' => $data]);
    }
}
