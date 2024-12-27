@extends('layout')
@section('section')

    @parent
    @include('components.carousel')

            <section class="philosophy__small_section">
            <div class="blog__title">
              Our Philosophy
            </div>
              <div class="philosophy">
                  <div class="philosophy__tag row">
                      <div class="philosophy__tag__image philosophy__small col-md-6 col-xs-12">
                          <img class="odd" src="{{ asset('img/images/ai_product1.jpg') }}" style="width: 100%"/>
                      </div>
                      <div class="service-text-container-1 col-md-6 col-xs-12">
                          <h1>Customer Centric</h1>
                          <div class="philosophy__item__content-secondary">
                          <h3>Empowering your business, one solution at a time</h3>
                          </div>
                          <span></span>
                          <p>Our philosophy is to prioritize customer needs and provide solutions. We understand that your needs are unique, which is why we offer customized solutions that are tailored to your specific requirements. Our commitment to excellent customer service means that we're always here to provide support when you need it. With our innovative solutions and customer-centric approach, we're here to help your business succeed. The company strives to develop long-term relationships with you and work towards your success..</p>
                      </div>
                  </div>
                  <div class="philosophy__tag row">


                          <div class="service-text-container-1 col-md-6 col-xs-12">
                          <h1>Innovation</h1>
                          <div class="philosophy__item__content-secondary">
                          <h3>Excellence in every detail.</h3>
                        </div>
                          <span></span>
                          <p>Quality is at the heart of everything we do. We're committed to delivering products/services that meet or exceed our customers' expectations. Our team of experts uses rigorous testing, quality control measures, and continuous improvement processes to ensure that our products/services are of the highest quality. Our philosophy is to prioritize excellence in everything that we do, from the quality of solutions to the quality of customer service.</p>
                      </div>
                      <div class="philosophy__tag__image philosophy__small col-md-6 col-xs-12">
                          <img class="even" src="{{ asset('img/images/ai_product2.jpg') }}"  style="width: 100%" />
                      </div>
                  </div>
                  <div class="philosophy__tag row">
                      <div class="philosophy__tag__image philosophy__small col-md-6 col-xs-12">
                          <img class="odd" src="{{ asset('img/images/ai_product3.jpg') }}"  style="width: 100%"/>
                      </div>

                          <div class="service-text-container-1 col-md-6 col-xs-12">
                          <h1>Ethics</h1>
                          <div class="philosophy__item__content-secondary">
                          <h3>Doing what's right, every time.</h3>
                        </div>
                          <span></span>
                          <p>At JKinda, our core values of honesty, integrity, and transparency guide everything we do. Our mission is to provide high-quality products/services while also making a positive impact on our employees, customers, and the wider community. We believe in ethical business practices, fair treatment of employees, environmentally sustainable practices. We're here to make a difference, one ethical decision at a time. We are committed to respecting the privacy and confidentiality of our customers, as well as complying with all applicable laws and regulations</p>
                      </div>
                  </div>
                  <div class="philosophy__tag row">


                          <div class="service-text-container-1 col-md-6 col-xs-12">
                          <h1>Collaboration</h1>
                          <div class="philosophy__item__content-secondary">
                          <h3>Working together for better results</h3>
                        </div>
                        <span></span>
                          <p>Collaboration is critical to the success of any IT services company. We encourage teamwork and collaboration both within the company and with our customers. We are open to feedback and suggestions from all stakeholders and work towards continuous improvement. Our team of experts work closely together to create innovative solutions that meet the unique needs of each client. We use cutting-edge tools and techniques to foster teamwork and communication, ensuring that everyone is working together towards a common goal. By leveraging the collective expertise of our team, we are able to deliver exceptional results for our clients</p>
                      </div>
                      <div class="philosophy__tag__image philosophy__small col-md-6 col-xs-12">
                          <img class="even" src="{{ asset('img/images/ai_product4.jpg') }}"  style="width: 100%"/>
                      </div>
                  </div>
              </div>
          </section>


          <section class="testimonial ">
            <div class="testimonial__title">
              Works
            </div>
            @include('components.works')
          </section>

          <section>
              <div class="blog__title">
                Blogs
              </div>
              <div class="blog__container row p-4">
                <div class="col-md-3 blog-item">
                <img src="{{ asset('img/hero.jpg') }}" height="40%" width="100%" />
                <!-- <img class="blog-image" src="./img/images/ai_generated.png" /> -->
                <div class="blog-container-text">
                    <span class="category-text">Javascript</span>
                      <h2><a  >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum justo sed eros aliquet,</a></h2>
                        <span class="subhead">
                        Ashwani | Dec 24 2023
                        </span>
                    </div>
                </div>
                <div class="col-md-3 blog-item">
                  <img src="{{ asset('img/hero.jpg') }}" height="40%" width="100%" />
                  <div class="blog-container-text">
                    <span class="category-text">Javascript</span>
                    <h2><a  >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum justo sed eros aliquet,</a></h2>
                      <span class="subhead">
                      Ashwani | Dec 24 2023
                      </span>
                  </div>
                </div>
                <div class="col-md-3 blog-item">
                  <img src="{{ asset('img/hero.jpg') }}" height="40%" width="100%" />
                  <!-- <img class="blog-image" src="./img/images/ai_generated.png" /> -->
                  <div class="blog-container-text">
                      <span class="category-text">Javascript</span>
                    <h2><a  >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum justo sed eros aliquet,</a></h2>
                      <span class="subhead">
                      Ashwani | Dec 24 2023
                      </span>
                  </div>
                </div>
                <div class="col-md-3 blog-item">
                  <img src="{{ asset('img/hero.jpg') }}" height="40%" width="100%" />
                  <!-- <img class="blog-image" src="./img/images/ai_generated.png" /> -->
                  <div class="blog-container-text">
                      <span class="category-text">Javascript</span>
                    <h2><a  >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum justo sed eros aliquet,</a></h2>
                      <span class="subhead">
                      Ashwani | Dec 24 2023
                      </span>
                  </div>
                </div>
              </div>
              
          </section>

            <section>
            @include('components.get_to_know')
            @include('components.newsletter')
            </section>
          @endsection
