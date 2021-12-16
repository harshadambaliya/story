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
                <p>ताशी तिब्बत से हैं, अब कई सालों से यूनिवर्सिटी में पढ़ा रहे हैं | गेरुआ और पीले रंग का वस्त्र धारण किये हुए, चहरे पर शांति का भाव, और आँखों में एक कौतुहल - एक संन्यासी |</p>
                <p>"मैं तुम्हारे बाबा से लगभग 10 साल पहले मिला था | वह यहाँ सारनाथ आये थे, तब उनसे मुलाकात हुई | एक अपनापन लगा जैसा मुझे अन्य सन्यासियों के साथ लगता है | फिर हम अक्सर मिलने लगे, कभी वह सारनाथ आते था, कभी मैं उनके घर.."</p>
                <p>मैं बचपन की यादों में ताशी का चेहरा टटोल रहा हूँ |</p>
                <p>"उन्होंने मुझसे एक विलुप्त भाषा पर काम करने का आग्रह किया था - अहोम | तेरहवीं से अठारहवीं सदी तक ब्रह्मपुत्र घाटी में अहोम राज्य की भाषा हुआ करती थी | फिर धीरे-धीरे असमिया ने अहोम भाषा का स्थान ले लिया |"</p>
                <p>"बाबा की इस विलुप्त भाषा में रूचि क्यों थी ?" अन्वेष ने पूछा | मैं अभी भी ताशी का चेहरा याद करने की कोशिश कर रहा हूँ |</p>
                <a href="across-time-part-3.1.php" >"शायद इस स्क्रॉल पर लिखने के लिए..." ताशी स्क्रॉल पढ़कर मुस्करा रहे हैं |</a>
                
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