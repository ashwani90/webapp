<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
        $image = "./img/ai_for/chatbot-3.webp";

        $button_text = "Get to know more";
        $button_link = "";
        $data = [
            "small_title" => $small_title,
            "title" => $title,
            "desc" => $desc,
            "image" => $image,
            "button_text" => $button_text,
            "button_link" => $button_link,
        ];
        return view('web.product', ['data' => $data]);
    }
    public function products(Request $request) {
        return response()->view('web/products');
    }
    public function services(Request $request) {
        return response()->view('web/services');
    }
    public function service(Request $request) {
        return response()->view('web/service');
    }
}
