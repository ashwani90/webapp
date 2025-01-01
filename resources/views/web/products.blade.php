@extends('layout')
@section('section')
@include('components.header-image')
<section class="container">
            <div class="product">
                <div class="product__item pt-2">
                    <div class="product__item__images col-md-6">
                        <img class="product__item__images__item1" width="300px" height="200x" src="img/products/chatbot_1.jpeg"/>
                        <img class="product__item__images__item2" width="300px" height="200x" src="img/products/chatbot_2.jpeg"/>
                        <img class="product__item__images__item3" width="300px" height="200x" src="img/products/chatbot_3.jpeg"/>
                    </div>
                    <div class="clearfix"></div>
                    <div class="product__item__text col-md-6">
                        <a href="/product/custom-chatbot"><h2>Custom Chatbot</h2></a>
                        <h6>Tailored chatbot solutions designed to meet your specific requirements.</h6>
                        <span></span>
                        <p>Our tailored chatbot solutions are meticulously crafted to align seamlessly with your unique specifications and preferences. Through an intricate process of customization, we ensure that every aspect of the chatbot is finely tuned to meet your specific needs and objectives. Our team of experienced developers and designers collaborates closely with you to understand your business requirements thoroughly, allowing us to deliver a chatbot solution that not only meets but exceeds your expectations.</p>
                        <ul class="product__item__list row mt-4 p-3">
                            <div class="col-md-6">
                                <li>Customized to your needs</li>
                                <li>Train on your data</li>
                                <li>Localized Hosting</li>
                            </div>
                            <div class="col-md-6">
                                <li>Easily Scalable</li>
                                <li>Connects to databases</li>
                                <li>Analyze data</li>
                            </div>
                        </ul>
                        <!-- <p>Our tailored chatbot solutions are meticulously crafted to align seamlessly with your unique specifications and preferences. Through an intricate process of customization, we ensure that every aspect of the chatbot is finely tuned to meet your specific needs and objectives. From user interface design to conversational flow and functionality, we prioritize precision and flexibility. Our team of experienced developers and designers collaborates closely with you to understand your business requirements thoroughly, allowing us to deliver a chatbot solution that not only meets but exceeds your expectations. Experience the power of tailored technology that enhances engagement, efficiency, and customer satisfaction.</p> -->
                    </div>
                </div>
                <div class="product__item">
                    <div class="product__item__text col-md-6">
                    <a href="/product/ai-automated-newspaper"><h2>AI Automated Newspaper</h2></a>
                        <h6>Stay informed, stay connected, and stay ahead.</h6>
                        <span></span>
                        <p>Introducing our cutting-edge product: an automated AI-based newspaper. Stay informed with live content sourced directly from the internet, conveniently condensed for busy readers. Perfect for those who crave up-to-date news but have limited time for traditional newspapers. Our innovative system utilizes a collection of agents to craft custom articles and provide real-time updates. Stay ahead of the curve with our streamlined platform, delivering curated news at your fingertips. Experience the future of news consumption with our AI-powered solution, tailored for modern lifestyles. </p>
                        <ul class="product__item__list row mt-4 p-3">
                            <div class="col-md-6">
                                <li>Concise News Presentation</li>
                                <li>Automated Article Generation</li>
                                <li>Customized News Coverage</li>
                            </div>
                            <div class="col-md-6">
                                <li>Topic Subscription for Updates</li>
                                <li>Summarized News Generation</li>
                                <li>Real-Time News Updates</li>
                            </div>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <div class="product__item__images col-md-6">
                        <img class="product__item__images__item1" width="300px" height="200x" src="img/products/ai_news.jpeg"/>
                        <img class="product__item__images__item2" width="300px" height="200x" src="img/products/ai_news1.jpeg"/>
                        <img class="product__item__images__item3" width="300px" height="200x" src="img/products/ai_news2.jpeg"/>
                    </div>
                </div>
                <div class="product__item">
                    <div class="product__item__images col-md-6">
                        <img class="product__item__images__item1" width="300px" height="200x" src="img/products/ocr_5.jpeg"/>
                        <img class="product__item__images__item2" width="300px" height="200x" src="img/products/ocr_6.jpeg"/>
                        <img class="product__item__images__item3" width="300px" height="200x" src="img/products/ocr_7.jpeg"/>
                    </div>
                    <div class="clearfix"></div>
                    <div class="product__item__text col-md-6">
                    <a href="/product/ocr-solution"><h2>OCR Solution</h2></a>
                        <h6>Simplifying Data Extraction and Validation for Your Business Needs</h6>
                        <span></span>
                        <p>Our OCR solution seamlessly reads and extracts data from forms, slips, invoices, and more, simplifying your document management process. With integrated pipelines, effortlessly integrate extracted data into your system, ensuring accuracy and efficiency. Identify and resolve discrepancies with ease using our built-in validation system, complete with notifications for timely issue resolution. Utilize anomaly detection to generate insightful reports for enhanced decision-making. Plus, benefit from localized hosting, scalable architecture, and high performance for a seamless user experience</p>
                        <ul class="product__item__list row mt-4 p-3">
                            <div class="col-md-6">
                                <li>Form and Receipt Processing</li>
                                <li>Seamless System Integration</li>
                                <li>Data Pipeline to Database</li>
                            </div>
                            <div class="col-md-6">
                                <li>Discrepancy Identification</li>
                                <li>Localized Hosting</li>
                                <li>Scalable and High Performance</li>
                            </div>
                        </ul>
                    </div>

                </div>

                <!-- <div class="product__item">
                    <div class="product__item__images col-md-6">
                        <img src="img/nat-1.jpg"/>
                        <img src="img/nat-2.jpg"/>
                        <img src="img/nat-3.jpg"/>
                    </div>
                    <div class="product__item__text col-md-6">
                        <h2>Ai Automated Newspaper</h2>
                        <h6>The newspaper compoent that is automated</h6>
                        <span></span>
                        <p>Description of the project Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sapien metus, gravida a commodo in, aliquet vitae felis. Integer semper mollis diam, sit amet aliquet orci tempor sed. Aenean mollis lorem consectetur ex tempor dapibus. Morbi at interdum urna. Donec mattis magna egestas odio ultricies pretium. Etiam consectetur tincidunt ligula a fermentum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lorem tortor, dapibus non eleifend quis, congue ut turpis. Quisque ut justo a lorem venenatis pharetra. Morbi faucibus elit eu ultrices condimentum. Nullam vulputate libero ut elit porta suscipit. Cras quam nibh, mollis tempor bibendum et, pharetra vel sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non erat ante.</p>
                    </div>
                </div>
                <div class="product__item row">
                    <div class="product__item__images col-md-6">
                        <img src="img/nat-1.jpg"/>
                        <img src="img/nat-2.jpg"/>
                        <img src="img/nat-3.jpg"/>
                    </div>
                    <div class="product__item__text col-md-6">
                        <h2>Ai Automated Newspaper</h2>
                        <h6>The newspaper compoent that is automated</h6>
                        <span></span>
                        <p>Description of the project Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sapien metus, gravida a commodo in, aliquet vitae felis. Integer semper mollis diam, sit amet aliquet orci tempor sed. Aenean mollis lorem consectetur ex tempor dapibus. Morbi at interdum urna. Donec mattis magna egestas odio ultricies pretium. Etiam consectetur tincidunt ligula a fermentum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lorem tortor, dapibus non eleifend quis, congue ut turpis. Quisque ut justo a lorem venenatis pharetra. Morbi faucibus elit eu ultrices condimentum. Nullam vulputate libero ut elit porta suscipit. Cras quam nibh, mollis tempor bibendum et, pharetra vel sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non erat ante.</p>
                    </div>
                </div>
                <div class="product__item">
                    <div class="product__item__images col-md-6">
                        <img src="img/nat-1.jpg"/>
                        <img src="img/nat-2.jpg"/>
                        <img src="img/nat-3.jpg"/>
                    </div>
                    <div class="product__item__text col-md-6">
                        <h2>Ai Automated Newspaper</h2>
                        <h6>The newspaper compoent that is automated</h6>
                        <span></span>
                        <p>Description of the project Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sapien metus, gravida a commodo in, aliquet vitae felis. Integer semper mollis diam, sit amet aliquet orci tempor sed. Aenean mollis lorem consectetur ex tempor dapibus. Morbi at interdum urna. Donec mattis magna egestas odio ultricies pretium. Etiam consectetur tincidunt ligula a fermentum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lorem tortor, dapibus non eleifend quis, congue ut turpis. Quisque ut justo a lorem venenatis pharetra. Morbi faucibus elit eu ultrices condimentum. Nullam vulputate libero ut elit porta suscipit. Cras quam nibh, mollis tempor bibendum et, pharetra vel sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non erat ante.</p>
                    </div>
                </div>
                <div class="product__item">
                    <div class="product__item__images col-md-6">
                        <img src="img/nat-1.jpg"/>
                        <img src="img/nat-2.jpg"/>
                        <img src="img/nat-3.jpg"/>
                    </div>
                    <div class="product__item__text col-md-6">
                        <h2>Ai Automated Newspaper</h2>
                        <h6>The newspaper compoent that is automated</h6>
                        <span></span>
                        <p>Description of the project Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sapien metus, gravida a commodo in, aliquet vitae felis. Integer semper mollis diam, sit amet aliquet orci tempor sed. Aenean mollis lorem consectetur ex tempor dapibus. Morbi at interdum urna. Donec mattis magna egestas odio ultricies pretium. Etiam consectetur tincidunt ligula a fermentum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lorem tortor, dapibus non eleifend quis, congue ut turpis. Quisque ut justo a lorem venenatis pharetra. Morbi faucibus elit eu ultrices condimentum. Nullam vulputate libero ut elit porta suscipit. Cras quam nibh, mollis tempor bibendum et, pharetra vel sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non erat ante.</p>
                    </div>
                </div> -->
            </div>
        </section>
        <section class="subs">
            <div class="subs__container">
                <h1>What can we help you with</h1>
                <div class="subs__container-btns">
                    <a href="/contact" class="subs__container-btns-contact">Schedule Demo</a>
                </div>
            </div>
        </section>
          @endsection
