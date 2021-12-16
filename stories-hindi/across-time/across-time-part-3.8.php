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
                <p>"बाबा...तिब्बत के मठ में ?" मैं सहसा बोल पड़ा |</p>
                <p>"तुम्हारे बाबा मुझसे भी पहले वहाँ संन्यासी थे |" देवी के इन शब्दों पर मैं विश्वास कर पाना मुश्किल है, लेकिन अब बाबा को कोई भी मुझसे बेहतर जानता था |</p>
                <p>"वहाँ मैं और तुम्हारे बाबा अच्छे दोस्त बन गए, हमारी लम्बी बातें होती थीं | लेकिन केशव ने कभी भी अपने बारे में बताया नहीं, वह कौन था, क्या करता था...और मैंने भी कभी ज़ोर नहीं दिया |" देवी की आँखों में एक आत्मीयता झलक रही है |</p>
                <p>"एक साल के बाद केशव अधीर होने लगा, कहा कि उसे वापस जाना होगा, कुछ ज़रूरी काम को अंज़ाम देना है | मैंने उसके साथ आने का निश्चय किया, और हम दोनों दरभंगा पहुँच गए |"</p>
                <a href="across-time-part-3.9.php" >मेरे अंदर हज़ारों सवाल घिर गए, अंदर का कोलाहल अब चेहरे दिख रहा है |</a>
                
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