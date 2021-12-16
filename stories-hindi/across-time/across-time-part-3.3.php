<?php  include ('../../include/header.php'); ?>
<!-- Landing Section Start -->
<section class="st-landing-section st-story-landing-section" style=" background-image: url(http://story.notionprojects.tech/assets/images/story-img.png);">
    <div class="container">
        <div class="text-center">
            <h1 class="st-section-title">समय के उस पार</h1>
            <h3 class="st-section-subtitle">अध्याय 3</h3>
        </div>
    </div>
    <img src="http://story.notionprojects.tech/assets/images/curve-shape.svg" alt="Curve Shape" class="img-fluid st-curve-img">
</section>
<!-- Landing Section End -->

<!-- Story Content Section Start -->
<section class="st-story">
    <div class="container">
        <div class="st-story-content">
            <div class="st-story-content__inner">
                <p>अन्वेष बुरी तरह से अपनी आँखें मसल रहा है | "क्या मिल गया भाई तुम्हें ?"</p>
                <p>"पता नहीं अन्वेष, लेकिन मुझे लगता है..." मैं अन्वेष के पास जाकर खड़ा हो गया, मेरी आँखों में नींद की जगह एक चमक है |</p>
                <p>"इस स्क्रॉल पर अहोम में जो लिखा है और पीछे जो कविता लिखी है - उसमें दो शब्द ऐसे हैं..."</p>
                <p>"कविता...कौन सी कविता ?" अन्वेष पूरी तरह से नींद से उठ गया |</p>
                <p>उसने मेरे हाथ से स्क्रॉल लेने की कोशिश की | "मैं बाद में यह कविता तुम्हें दिखाता हूँ, यह बाबा नागार्जुन की कविता है जो मेरे बाबा बचपन में मुझे सुनते थे |"</p>
                <p>अन्वेष की संदेही नज़रों को मैंने अनदेखा कर दिया| "यह कविता उनको समर्पित है जो अपने कार्यों को पूरा नहीं कर पाए | अहोम में जो लिखा है, उसमें भी अपूर्णता के बारे में लिखा है| और मेरे बाबा का बौद्ध धर्म में विश्वास था | तो दो शब्द निकल कर आते हैं - अपूर्ण, बौद्ध | मैंने इंटरनेट पर इन दो शब्दों को मिलाकर सर्च किया |"</p>
                <a href="across-time-part-3.4.php" >"और क्या मिला तुम्हें ? क्या..हमें क्या करना है?" अन्वेष भी अपनी जगह पर खड़ा हो गया |</a>
                
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#SaveLaterModal" >Save For Later</button>
            </div>
            
            <div class="st-feedback-content">
                <h4 class="st-feedback-title">Give your Feedback</h4>
                <ul class="st-feedback-rate-list">
                    <li class="st-feedback-rate-item"><i class="far fa-star"></i></li>
                    <li class="st-feedback-rate-item"><i class="far fa-star"></i></li>
                    <li class="st-feedback-rate-item"><i class="far fa-star"></i></li>
                    <li class="st-feedback-rate-item"><i class="far fa-star"></i></li>
                    <li class="st-feedback-rate-item"><i class="far fa-star"></i></li>
                </ul>
                <form>
                    <textarea name="st-comment" id="" rows="5" placeholder="Write your feedback here" class="form-control"></textarea>
                    <button type="button" class="btn btn-danger">Leave Feedback</button>
                </form>
            </div>
            
            <div class="st-share">
                <ul class="st-share-list">
                    <li class="st-share-item">
                        <a href="#" class="st-share-link"><i class="fas fa-reply"></i></a>
                    </li>
                    <li class="st-share-item">
                        <a href="#" class="st-share-link"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="st-share-item">
                        <a href="#" class="st-share-link"><i class="fab fa-whatsapp"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Story Content Section End -->



<!-- Choose Language Modal -->
<div class="modal fade" id="QuestionModal" tabindex="-1" aria-labelledby="QuestionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="QuestionModalLabel">Questions Title </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body choose-lang-content">
                <h3 class="st-question">Question Question Question</h3>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1"> Yes </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2"> No </label>
                </div>
            </div>
        </div>
    </div>
</div>

<?php  include ('../../include/footer.php'); ?>