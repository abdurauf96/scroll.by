<div class="section section-email" id="begin_project">
    <div class="top_line_description" style="margin-bottom: 110px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="ml-email">
                        <div class="wow fadeInUp">
                        <h2 class="top_ttle">Обсудим проект?</h2>
                    </div>
                    <div class="icon-category">
                        <a class="learn-more" target="_blank" href="assets/images/BRIEF-SYTE-SCROLL-MEDIA-SOLUTIONS.doc" download="BRIEF-SYTE-SCROLL-MEDIA-SOLUTIONS RU">
                            <div class="circle-red">
                              <span class="icon">
                                 <img src="/img/icon/contact-icon.png" alt="">
                             </span>
                         </div>
                         <p class="button-text">Скачать бриф</p>
                     </a>
                 </div>
                    </div>
                    <!-- <div class="work_img">
                        <a href="#">
                            <img src="img/icon/contact-icon.png" alt="">
                        </a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="email_main red-form">
        <div class="email_form">
            <form action="#" method="POST" accept-charset="utf-8" id="zayafka_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="Начнем проект" name="subject">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="group">
                            <input type="text" name="name"  required><span class="highlight"></span><span class="bar"></span>
                            <label>Представьтесь, пожалуйста</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="group">
                            <input type="text" name="phone"  required><span class="highlight"></span><span class="bar"></span>
                            <label>Номер Вашего телефона</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="group">
                            <input type="email" name="email" required><span class="highlight"></span><span class="bar"></span>
                            <label>Ваш e-mail</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="group">
                            <select name="service">
                                <option value="" >Выберите необходимую услугу</option>
                                @foreach ($services as $ser)
                                <option value="{{ $ser->title }}">{{ $ser->title }}</option>
                                @endforeach
                            </select>
                           
                            <!-- <input type="text" name="service" required><span class="highlight"></span><span class="bar"></span>
                            <label>Выберите необходимую услугу<i class="fal fa-long-arrow-right"></i></label> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="group icon">
                            <input type="file" class="chooseFileRed" style="opacity:0;" name="file"><span class="highlight"></span><span class="bar bar_file"></span>
                            <label>Прикрепить файл (бриф) <span class="clip"><i class="fal fa-paperclip"></i></span> </label>
                            <div class="text-file"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="group">
                            <input type="text" name="comment"><span class="highlight"></span><span class="bar"></span>
                            <label>Комментарий</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="group_check">
                                <input type="checkbox" class="option-input checkbox" required />
                                 <label>Согласие на обработку  персональных данных</label>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn-circle white btn-style-transparent btn-true">Отправить заявку<span></span></button>
            </form>
        </div>
    </div>
</div>