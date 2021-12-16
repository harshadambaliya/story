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
                <p>हम दोनों के बीच एक चुप्पी छायी है | "तुम्हारे बाबा कौन थे ? यह तो साफ़ है कि वह बस एक पोस्टमॉस्टर या फिर बौद्ध सन्यासी भी नहीं थे |" अन्वेष ने चुप्पी तोड़ी |</p>
                <p>"मुझे पता नहीं वह कौन थे, क्या करना चाह रहे थे ? लेकिन हमें यह तुरंत निर्णय लेना होगा कि हम क्या करना चाहते हैं ?" मेरी आवाज़ में एक बेचैनी है |</p>
                <p>उस स्क्रॉल में गुफ़ा और डिवाइस का विवरण दिया हुआ है | यह गुफ़ा एक वर्महोल है, जिससे होकर कोई भी दुसरे समयकाल (टाइमज़ोन) में जा सकता है | वर्महोल के बारे में हमने पढ़ा तो है, लेकिन बस विज्ञान की किताबों या काल्पनिक कहानियों में...आज एक जीते-जागते वर्महोल के सामने खड़े हैं |</p>
                <p>वह डिवाइस एक समयकाल से दूसरे में सन्देश भेजने के लिए एक यन्त्र है | कैसे इस डिवाइस का प्रयोग करें, इसका पूरा विवरण भी इस स्क्रॉल में दिया हुआ है |</p>
                <p>"लेकिन हमें पता नहीं दूसरी तरफ़ क्या है ? वहाँ जाकर किससे मिलना है ? वहाँ क्या करना है ? इतने सारे सवाल हैं, और ज़वाब एक भी नहीं | कैसे निर्णय लें ?" अन्वेष की आवाज़ में एक हताशा है |</p>
                <p>"मुझे पता है अन्वेष | लेकिन यही नियति है |" मैंने कहना शुरू किया |</p>
                
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