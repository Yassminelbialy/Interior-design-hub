@push('token')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@push('quizscript')
<script src="{{URL::asset('js/quizscript.js')}}"></script>

@endpush
<!-- Button trigger modal -->
<button class="open_quizes_modal" style="display: none" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_quiz">
  Launch quizes modal
</button>
<div class="modal modal_quizes fade " id="modal_quiz" tabindex="-1" role="dialog" aria-labelledby="quizModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="text-center modal-head">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="container all_quizes">
          <div class="row">
            <div class="col-md-9 all_quiz_content text-center">
              <h2 class="modal-title">Bonpoc <span class="number_of_quiz">1</span> n3 5</h2>

              <section class="tabs text-center">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a data-value="1" class="nav-link active" id="pills-quiz1-tab" data-toggle="pill" href="#pills-quiz1" role="tab" aria-controls="pills-quiz1" aria-selected="true"></a>
                  </li>

                  <li class="nav-item">
                    <a data-value="2" class="nav-link " id="pills-quiz2-tab" data-toggle="pill" href="#pills-quiz2" role="tab" aria-controls="pills-quiz2" aria-selected="false"></a>
                  </li>


                  <li class="nav-item">
                    <a data-value="3" class="nav-link" id="pills-quiz3-tab" data-toggle="pill" href="#pills-quiz3" role="tab" aria-controls="pills-quiz3" aria-selected="false"></a>
                  </li>


                  <li class="nav-item">
                    <a data-value="4" class="nav-link" id="pills-quiz4-tab" data-toggle="pill" href="#pills-quiz4" role="tab" aria-controls="pills-quiz4" aria-selected="false"></a>
                  </li>


                  <li class="nav-item">
                    <a data-value="5" class="nav-link" id="pills-quiz5-tab" data-toggle="pill" href="#pills-quiz5" role="tab" aria-controls="pills-quiz5" aria-selected="false"></a>
                  </li>

                  <!-- <li class="nav-item">
                        <a class="nav-link" id="pills-quiz5-tab" data-toggle="pill" href="#pills-quiz6" role="tab" aria-controls="pills-quiz5" aria-selected="false"></a>
                      </li> -->
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane quiz1  tab_select fade show active" id="pills-quiz1" role="tabpanel" aria-labelledby="pills-quiz1-tab">
                    <form action="">
                      <h2 class="mb-4">Which Design You Enjoy ? ?</h2>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-4 col-sm-6">

                            <div class="check_style">
                              <img src="images/decore1.jpeg" alt="picture_style" />
                              <label class="checkbox_container">
                                <input type="radio" class="q1 x" name="check_quiz1" value="q1 1">
                                <span class="checkmark"></span>
                              </label>
                              <p>Classic</p>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6">
                            <div class="check_style">
                              <img src="images/decore2.jpeg" alt="picture_style" />
                              <label class="checkbox_container">
                                <input type="radio" class="q1 x" name="check_quiz1" value="q1 2">
                                <span class="checkmark"></span>
                              </label>
                              <p>Modern</p>
                            </div>

                          </div>
                          <div class="col-md-4 col-sm-6">
                            <div class="check_style">
                              <img src="images/decore3.jpeg" alt="picture_style" />
                              <label class="checkbox_container">
                                <input type="radio" class="q1 x" name="check_quiz1" value="q1 3">
                                <span class="checkmark"></span>
                              </label>
                              <p>Coastal</p>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6">
                            <div class="check_style">
                              <img src="images/decore4.jpeg" alt="picture_style" />
                              <label class="checkbox_container">
                                <input type="radio" class="q1 x" name="check_quiz1" value="q1 4">
                                <span class="checkmark"></span>
                              </label>
                              <p>Farmhouse</p>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6">
                            <div class="check_style">
                              <img src="images/decore6.jpeg" alt="picture_style" />
                              <label class="checkbox_container">
                                <input type="radio" class="q1 x" name="check_quiz1" value="q1 5">
                                <span class="checkmark" name="check_quiz1"></span>
                              </label>
                              <p>Minimalist</p>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6">
                            <div class="check_style">
                              <img src="images/decore2.jpeg" alt="picture_style" />
                              <label class="checkbox_container">
                                <input type="radio" class="q1 x" name="check_quiz1" value="q1 6">
                                <span class="checkmark"></span>
                              </label>
                              <p>Scandinavian</p>
                            </div>

                          </div>
                          <div class="btn_content text-center mt-3 w-100">
                            <a data-value="2" class="btn btn_next disabled" id="buttontab1" data-toggle="pill" href="#pills-quiz2" role="tab" aria-controls="pills-quiz2" aria-selected="false">next</a>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="tab-pane fade" id="pills-quiz2" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <section class="quiz2">
                      <div class="container-fluid">
                        <div class="row quiz2_content">
                          <div class="col-md-4 col-sm-6">
                            <img class="w-100 h-100" src="images/map.PNG" alt="">
                          </div>
                          <div class="col-md-8 col-sm-6">
                            <h2>Lets Know More About Our Work</h2>
                            <div class="text_for_rang1">
                              <span class="mr-2">Get Info About Your Site Map and Area ? </span> <span>5000</span> <span>M<sup>2</sup></span>
                            </div>

                            <div class="range">
                              <div class="slidecontainer">
                                <div class="text_for_rang2">
                                  <span class="value_changing">
                                    <span id="rangevalue">20 </span>
                                    M<sup>2</sup>
                                  </span>
                                  <span class="maximum">5000 M<sup>2</sup></span>
                                </div>
                                <input type="range" min="1" max="5000" value="3000" id="myrange" class="slider_range q2" name="area">

                              </div>
                            </div>
                            <!-- <p>yandix ysad kqwey yandix ysad yandix ysad kqwey yandix </p> -->
                            <div class="input-group text-center">
                              <div class="custom-file">
                                <input data-browse="Bestand kiezen.PNG" multiple type="file" class="custom-file-input check_quiz3 q2" name="file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                <label class="custom-file-label" for="inputGroupFile04"></label>
                              </div>
                              <div class="input-group-append">

                              </div>
                            </div>

                          </div>
                          <div class="btn_content text-center mt-3 w-100">
                            <a data-value="3" class="btn btn_next disabled buttontab2 " id="pills-quiz3-tab" data-toggle="pill" href="#pills-quiz3" role="tab" aria-controls="pills-quiz3" aria-selected="false">next</a>
                          </div>
                        </div>
                      </div>
                    </section>

                  </div>
                  <div class="tab-pane fade" id="pills-quiz3" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <section class="quiz3">
                      <form action="">
                        <h2>Which Styles You Prefer ?</h2>
                        <div class="container">
                          <div class="row">
                            <div class="col-md-3 col-sm-6">
                              <div class="check_style">
                                <img class="w-100 h-100" src="images/decore1.jpeg" alt="picture_style" />
                                <label class="checkbox_container">
                                  <input type="checkbox" name="check_quiz3" value="1">
                                  <span class="checkmark"></span>
                                </label>
                                <p>Modern</p>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                              <div class="check_style">
                                <img class="w-100 h-100" src="images/decore2.jpeg" alt="picture_style" />
                                <label class="checkbox_container">
                                  <input type="checkbox" name="check_quiz3" value="2">
                                  <span class="checkmark"></span>
                                </label>
                                <p>Scandinavian</p>
                              </div>

                            </div>
                            <div class="col-md-3 col-sm-6">
                              <div class="check_style">
                                <img class="w-100 h-100" src="images/decore3.jpeg" alt="picture_style" />
                                <label class="checkbox_container">
                                  <input type="checkbox" name="check_quiz3" value="3">
                                  <span class="checkmark"></span>
                                </label>
                                <p>Southwest</p>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                              <div class="check_style">
                                <img class="w-100 h-100" src="images/decore2.jpeg" alt="picture_style" />
                                <label class="checkbox_container">
                                  <input type="checkbox" name="check_quiz3" value="4">
                                  <span class="checkmark"></span>
                                </label>
                                <p>Amereican</p>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                              <div class="check_style">
                                <img class="w-100 h-100" src="images/decore4.jpeg" alt="picture_style" />
                                <label class="checkbox_container">
                                  <input type="checkbox" name="check_quiz3" value="5">
                                  <span class="checkmark"></span>
                                </label>
                                <p>Coastal</p>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                              <div class="check_style">
                                <img class="w-100 h-100" src="images/decore6.jpeg" alt="picture_style" />
                                <label class="checkbox_container">
                                  <input type="checkbox" name="check_quiz3" value="6">
                                  <span class="checkmark"></span>
                                </label>
                                <p>Scandinavian</p>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                              <div class="check_style">
                                <img class="w-100 h-100" src="images/decore3.jpeg" alt="picture_style" />
                                <label class="checkbox_container">
                                  <input type="checkbox" name="check_quiz3" value="7">
                                  <span class="checkmark"></span>
                                </label>
                                <p>Classic</p>
                              </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                              <div class="check_style">
                                <img class="w-100 h-100" src="images/decore1.jpeg" alt="picture_style" />
                                <label class="checkbox_container">
                                  <input type="checkbox" name="check_quiz3" value="8">
                                  <span class="checkmark"></span>
                                </label>
                                <p>Classic</p>
                              </div>
                            </div>
                            <div class="btn_content text-center mt-3 w-100">
                              <a data-value="4" class="btn btn_next buttontab3 disabled buttontab3" id="pills-quiz4-tab" data-toggle="pill" href="#pills-quiz4" role="tab" aria-controls="pills-quiz4" aria-selected="false">next</a>
                            </div>
                            </li>
                          </div>
                        </div>
                      </form>

                    </section>
                  </div>
                  <div class="tab-pane fade" id="pills-quiz4" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <section class="quiz4">
                      <div class="container-fluid">
                        <div class="row quiz2_content">
                          <div class="col-md-4 col-sm-6">
                            <img class="w-100 h-100" src="images/quiz4.jpg" alt="">
                          </div>
                          <div class="col-md-8 col-sm-6">
                            <h2>Would you To Participate In Development?</h2>

                            <div class="border choose_multi mt-3">
                              <label class="checkbox_container">
                                <input type="radio" name="check_quiz4" class="q4" value="111">
                                <span class="checkmark"></span>
                              </label>
                              <p> yes </p>
                            </div>
                            <div class="border choose_multi mt-3">
                              <label class="checkbox_container">
                                <input type="radio" name="check_quiz4" class="q4" value="222">
                                <span class="checkmark"></span>
                              </label>
                              <p>No </p>
                            </div>
                            <div class="border choose_multi mt-3">
                              <label class="checkbox_container">
                                <input type="radio" name="check_quiz4" class="q4" value="333">
                                <span class="checkmark"></span>
                              </label>
                              <p>maybe </p>
                            </div>
                            <div class="border choose_multi mt-3">
                              <label class="checkbox_container">
                                <input type="radio" name="check_quiz4" class="q4 " value="444">
                                <span class="checkmark"></span>
                              </label>
                              <p>i dont know </p>
                            </div>

                          </div>
                          <div class="btn_content text-center mt-3 w-100">
                            <a data-value="5" class="btn btn_next disabled buttontab4" id="pills-quiz5-tab" data-toggle="pill" href="#pills-quiz5" role="tab" aria-controls="pills-quiz5" aria-selected="false">next</a>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                  <div class="tab-pane fade" id="pills-quiz5" role="tabpanel" aria-labelledby="pills-quiz5-tab">
                    <section class="quiz5">
                      <div class="container-fluid">
                        <div class="row quiz2_content">
                          <div class="col-md-4 col-sm-6">
                            <img class="w-100 h-100" src="images/quiz5.jpg" alt="">
                          </div>
                          <div class="col-md-8 col-sm-6">
                            <h2>Are You In Urgent ?</h2>

                            <div class="border choose_multi mt-3">
                              <label class="checkbox_container">
                                <input type="radio" class="q5 " value="1">
                                <span class="checkmark "></span>
                              </label>
                              <p> Yes My Requesr is Very Urgent </p>
                            </div>
                            <div class="border choose_multi mt-3">
                              <label class="checkbox_container">
                                <input type="radio" class="q5 " value="2">
                                <span class="checkmark"></span>
                              </label>
                              <p> Yes My Requesr is Slightly Urgent</p>
                            </div>
                            <div class="border choose_multi mt-3">
                              <label class="checkbox_container">
                                <input type="radio" class="q5 " value="3">
                                <span class="checkmark"></span>
                              </label>
                              <p> Not Mattar . </p>
                            </div>
                            <div class="border choose_multi mt-3">
                              <label class="checkbox_container">
                                <input type="radio" class="q5 " value="4">
                                <span class="checkmark"></span>
                              </label>
                              <p> No My Requesr is Not Important Instant. </p>
                            </div>
                          </div>
                          <div class="btn_content text-center mt-3 w-100">
                            <a data-value="5" class="btn btn_next buttontab5 disabled" id="pills-quiz6-tab" data-toggle="pill" href="#pills-quiz6" role="tab" aria-controls="pills-quiz6" aria-selected="false">next</a>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>

                  <div class="tab-pane fade" id="pills-quiz6" role="tabpanel" aria-labelledby="pills-quiz5-tab">
                    <section class="quiz6">
                      <h2>Choose Contact Tybe U Prefer ?</h2>
                      <div class="container-fluid">
                        <div class="row quiz6_content">

                          <div class="col-md-5 col-sm-6">
                            <img class="w-100 h-75" src="images/quiz6.PNG" alt="image contact">
                          </div>
                          <div class="col-md-7 col-sm-6">


                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-md-6 mt-3">
                                  <div class="calls_container">
                                    <span>Viber</span><img class="viber_image" src="images/viber.png" alt="">
                                    <label class="checkbox_container">
                                      <input type="radio" class="q6" value="viber" name="viber">
                                      <span class="checkmark"></span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                  <div class="calls_container">
                                    <span>Telegram</span><i class="fab fa-telegram-plane"></i>
                                    <label class="checkbox_container">
                                      <input type="radio" class="q6" value="telegram" name="telegram">
                                      <span class="checkmark"></span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                  <div class="calls_container">
                                    <span>Whatsapp</span><img class="viber_image" src="images/whatsapp1.png" alt="">
                                    <label class="checkbox_container">
                                      <input type="radio" class="q6" value="whatsapp" name="whatsapp">
                                      <span class="checkmark"></span>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                  <div class="calls_container">
                                    <span>Normal</span><img class="viber_image" src="images/viber.png" alt="">
                                    <label class="checkbox_container">
                                      <input type="radio" class="q6" value="normal" name="normal">
                                      <span class="checkmark"></span>
                                    </label>
                                  </div>
                                </div>

                                <h2>
                                  Asatisfied Customer Is THe Best Buissnes Strategy :) .
                                </h2>
                                <input type="text" placeholder="You name*" class="q7" name="name">

                                <input type="text" placeholder="Your Phone*" class="q7" name="phone">

                                <button disabled class="btn_next done submitquiz">Send Us All Answers </button>

                                <div class="check_it text-left">
                                  <label class="checkbox_container2">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                  </label>
                                  Bbi contawerecb c <a href="#">nonmtmnkon Kohqnma9hoctnmAohqnma9hoctnmA</a>
                                </div>
                              </div>
                            </div>


                          </div>
                          <!-- <a class="btn btn_next" id="pills-quiz5-tab" data-toggle="pill" href="#quiz5" role="tab" aria-controls="pills-quiz5" aria-selected="false">done</a> -->
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </section>
            </div>
            <div class="col-md-3 static_column text-center">
              <div class="container">
                <div>
                  <img src="images/Alexadra_static.jpg" alt="image alexandra" />
                </div>
                <p class="mt-4">
                  Shop Target's home furniture collections and find furniture and accessories for every room in your home. Free shipping on orders $35+ & free returns </p>
                <p class="mt-3 mb-4">
                  ovable objects intended to support various human activities </p>
                <!-- <h3 class="mb-3">B Koue tecta Bbi nonyuta:</h3> -->
                <br><br>
                <div class="row other_info">
                  <div class="col-sm-4 ">
                    <img class="h-75" src="images/quiz1.1.PNG" alt="image quiz">
                  </div>
                  <div class="text-left col-sm-8">
                    <p>designa8</p>
                  </div>
                  <div class="col-sm-4 mt-2">
                    <img class="handle" src="images/quiz1.2.PNG" alt="image quiz">
                  </div>
                  <div class="text-left col-sm-8 mt-2">
                    <p>we choose the best for you</p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
    </div>
  </div>
</div>
</div>





<!-- Button trigger modal -->
<button class="open_contact_modal" type="button" class="btn btn-primary" data-toggle="modal" data-target="#contactModal" style="display: none">
  Launch contact modal
</button>

<!-- Modal -->
<div class="modal contact_modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body">
        <div class="pop_up">
          <div class="container calls_container">
            <div class="row">
              <div class="left text-center col-md-5">
                <div class="decoration_content">
                  <div class="decoration1"></div>
                  <div class="decoration2"></div>
                  <img src="images/alexandra2_quiz.PNG.jpg" alt="image alexandra" />
                </div>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p> -->
              </div>
              <div class="right text-center col-md-7">
                <h2>Designa8 Contacts</h2>
                <div class="custom_border"></div>
                <p>Happy to help you, call us :)</p>
                <div class="row">
                  <div class="col-md-4">
                    <div class="callme">
                      <span>viber</span>
                      <img class="viber_image" src="images/viber.png" alt="" />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="callme whatsapp">
                      <span>Whatsapp</span>
                      <img class="whatsapp_image" src="images/whatsapp1.png" alt="" />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="callme">
                      <span>Telegram</span> <i class="fab fa-telegram-plane"></i>
                    </div>
                  </div>
                </div>
                <!-- <h2>
                  Bbi Mokete Octabnb Homep N Mbi nepe3BoHNM Bam Te4ehne 5 MnhyT
                </h2> -->
                <br><br><br><br>
                <div class="row hello">
                  <div class="col-md-6 mt-2">
                    <p> 01157580654 </p>
                  </div>
                  <div class="col-md-6 mt-2">
                    <p class="next_step">Avalible 24/7</p>
                  </div>
                  <!-- <div class="check_it">
                    <label class="checkbox_container">
                      <input type="checkbox" />
                      <span class="checkmark"></span>
                    </label>
                    <a href="#">nonmtmnkon Kohqnma9hoctnmAohqnma9hoctnmA</a>
                  </div> -->
                </div>
              </div>

              <div class="right2 text-center col-md-7">
                <h2>The following quiz will help us to know you order</h2>
                <div class="custom_border"></div>
                <div class="row mt-4 custom_design">
                  <div class="col-md-6">
                    <p>Kak Bac 3oByT?</p>
                    <!-- <p class="text-left">Bawe NMR</p> -->
                  </div>
                  <div class="col-md-6">
                    <!-- <p>Kak Bac 3oByT?</p> -->
                    <div class="text-left">
                      <!-- <span>AA.MM.rrrr</span> -->
                      <select name="time">
                        <option>
                          1:00
                        </option>
                        <option>
                          2:00
                        </option>
                        <option>
                          3:00
                        </option>
                        <option>
                          3:00
                        </option>
                        <option>
                          4:00
                        </option>
                        <option>
                          5:00
                        </option>
                        <option>
                          6:00
                        </option>
                        <option>
                          7:00
                        </option>
                        <option>
                          8:00
                        </option>
                        <option selected>
                          9:00
                        </option>
                        <option>
                          10:00
                        </option>
                        <option>
                          11:00
                        </option>
                        <option>
                          12:00
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <button class="btn_next open_quiz">
                  Apply quiz now!
                </button>
                <!-- <div class="check_it">
                  <label class="checkbox_container">
                    <input type="checkbox" />
                    <span class="checkmark"></span>
                  </label>
                  Bbi contawerecb c
                  <a href="#">nonmtmnkon Kohqnma9hoctnmAohqnma9hoctnmA</a>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Button trigger modal -->
<button type="button" class="btn open_thanks_modal btn-primary" data-toggle="modal" data-target="#thanksModal" style="display: none">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal  fade" id="thanksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>

      <div class="modal-body">
        <div class="container text-center">
          <h2>Thanks for You to Choice us </h2>
          <div class="custom_border"></div>
          <p>
            You can track your order and communicate with admin if you register <a href="/register"> Now </a>
            <br> Please write your number in the registe form like in the quiz form
          </p>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <img src="/images/instgram_phone.PNG" alt="mobile image">
            </div>
            <div class="col-md-6 col-sm-12">


              <!-- <button class="btn_next">nepentn HA Instgram</button> -->


              <!-- <div class="wiki">
                <i class="fas fa-globe"></i> <a href="">BepHYTbCr Ha CaNT</a>
              </div> -->
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</div>