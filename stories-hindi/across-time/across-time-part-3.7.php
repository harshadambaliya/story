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
                <p>"कहाँ से शुरू करूँ..." देवी अपने कमरे की खिड़की से बाहर देख रही हैं | सामने म्यूजियम के बाग़ीचे में पेड़ों के झुरमुट में अस्ताचल सूर्य अपनी बची-खुची किरणों को समेट रहा था |</p>
                <p>"30 साल पहले मैंने यह म्यूजियम ज्वाइन किया था, मुझे इतिहास में काफ़ी रूचि थी | माँ-बाप और दो भाइयों के साथ एक ख़ुशनुमा जिंदगी थी |</p>
                <p>फ़िर जीवन ने एक करवट ली | एक हादसे में माँ-बाप चल बसे, भाइयों ने पल्ले झाड़ लिए | मेरे अंदर एक अशांति, एक अधीरता आ गयी|" देवी के चेहरे पर कोई शिकन नहीं है | जिस स्थिरता के साथ उसने कहानी की शुरुआत की थी, वह अब और स्पष्ट रूप से दिख रही है |</p>
                <p>"मैंने बौद्ध धर्म की शरण ले ली | मेरे एक मार्गदर्शक के कहने पर मैंने तिब्बत जाने का निर्णय लिया, एक सन्यासिनी बनने के लिए |"</p>
                <a href="across-time-part-3.8.php" >"वहीँ तिब्बत के मठ में मेरी मुलाक़ात केशव के साथ हुई |"</a>
                
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