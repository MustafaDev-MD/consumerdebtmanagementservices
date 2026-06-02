<div class="ds-form-wrapper">
    <div class="ds-card">

        <!-- TOP HEADING -->
        <div class="ds-header">
            <h4>Request Your Personalized Debt Analysis</h4>
            <p>Brief 30-second form – zero obligation, no impact on credit.</p>
        </div>

        <!-- PROGRESS -->
        <div class="ds-progress-wrap">
            <div class="ds-progress-bar" id="progressBar"></div>
        </div>

        <!-- STEP INFO -->
        <div class="ds-step-info">
            <p class="ds-step-count">Step <span id="stepNum">1</span> of 5</p>
            <p class="ds-time">~30 seconds</p>
        </div>

        <form id="multiStepForm">

            <!-- STEP 1 -->
            <div class="ds-step active">
                <h3 class="ds-question">What is your total estimated debt balance?</h3>
                <p class="ds-subtext">Estimates are acceptable.</p>

                <div class="ds-options">
                    <div class="ds-option">Under $5,000</div>
                    <div class="ds-option">$5,000 - $10,000</div>
                    <div class="ds-option">$10,000 - $25,000</div>
                    <div class="ds-option">$25,000 - $50,000</div>
                    <div class="ds-option">$50,000 - $100,000</div>
                    <div class="ds-option">Over $100,000</div>
                </div>

                <button type="button" class="ds-btn ds-next">View My Estimate →</button>
            </div>

            <!-- STEP 2 -->
            <div class="ds-step">
                <h3 class="ds-question">What types of debt do you have?</h3>
                <p class="ds-subtext">Select all that apply.</p>

                <div class="ds-checks">
                    <label class="ds-check-card">
                        <input type="checkbox">
                        <span>Credit cards</span>
                    </label>

                    <label class="ds-check-card">
                        <input type="checkbox">
                        <span>Medical bills</span>
                    </label>

                    <label class="ds-check-card">
                        <input type="checkbox">
                        <span>Personal loans</span>
                    </label>

                    <label class="ds-check-card">
                        <input type="checkbox">
                        <span>Collections</span>
                    </label>

                    <label class="ds-check-card">
                        <input type="checkbox">
                        <span>Payday loans</span>
                    </label>

                    <label class="ds-check-card">
                        <input type="checkbox">
                        <span>Store cards</span>
                    </label>
                </div>

                <div class="ds-btns">
                    <button type="button" class="ds-btn ds-back">← Back</button>
                    <button type="button" class="ds-btn ds-next">Continue →</button>
                </div>
            </div>

            <!-- STEP 3 -->
            <div class="ds-step">
                <h3 class="ds-question">What is your name?</h3>
                <input type="text" class="ds-input" placeholder="Full Name">

                <div class="ds-btns">
                    <button type="button" class="ds-btn ds-back">← Back</button>
                    <button type="button" class="ds-btn ds-next">Continue →</button>
                </div>
            </div>

            <!-- STEP 4 -->
            <div class="ds-step">
                <h3 class="ds-question">Best phone number</h3>
                <input type="text" class="ds-input" placeholder="Phone Number">

                <div class="ds-btns">
                    <button type="button" class="ds-btn ds-back">← Back</button>
                    <button type="button" class="ds-btn ds-next">Continue →</button>
                </div>
            </div>

            <!-- STEP 5 -->
            <div class="ds-step">
                <h3 class="ds-question">Email Address</h3>
                <input type="email" class="ds-input" placeholder="Email Address">

                <div class="ds-btns">
                    <button type="button" class="ds-btn ds-back">← Back</button>
                    <button type="button" class="ds-btn ds-next">Submit</button>
                </div>
            </div>

            <!-- SUCCESS -->
            <div class="ds-step ds-success">
                <h2>✓ You are All Set!</h2>
                <p>A debt specialist will call you shortly.</p>

            </div>

        </form>
        <hr class="mt-2">
        <ul class="flex gap-20 m-0">
            <li class="p-0">🔒 Fully Private & Secure</li>
            <li class="p-0">✓ Zero Upfront Costs</li>
            <li class="p-0">⭐ A+ Accredited Business</li>
        </ul>
    </div>
</div>
<script>
    let currentStep = 0;

    const steps = document.querySelectorAll(".ds-step");
    const nextBtns = document.querySelectorAll(".ds-next");
    const backBtns = document.querySelectorAll(".ds-back");

    const progressBar = document.getElementById("progressBar");
    const stepNum = document.getElementById("stepNum");

    // ===== SHOW STEP =====
    function showStep(index) {
        steps.forEach(s => s.classList.remove("active"));
        steps[index].classList.add("active");

        // Step number (max 5)
        stepNum.innerText = Math.min(index + 1, 5);

        // Progress bar (ignore success step)
        let percent = (index / (steps.length - 1)) * 100;
        progressBar.style.width = percent + "%";
    }

    // ===== NEXT BUTTON =====
    nextBtns.forEach(btn => {
        btn.addEventListener("click", () => {

            // ===== VALIDATION =====

            // STEP 1
            if (currentStep === 0) {
                let selected = document.querySelector(".ds-option.active");
                if (!selected) {
                    alert("Please select your debt amount");
                    return;
                }
            }

            // STEP 2
            if (currentStep === 1) {
                let checked = document.querySelectorAll(".ds-check-card input:checked");
                if (checked.length === 0) {
                    alert("Select at least one debt type");
                    return;
                }
            }

            // STEP 3
            if (currentStep === 2) {
                let name = document.querySelector(".ds-input[placeholder='Full Name']");
                if (!name.value.trim()) {
                    alert("Enter your name");
                    return;
                }
            }

            // STEP 4
            if (currentStep === 3) {
                let phone = document.querySelector(".ds-input[placeholder='Phone Number']");
                if (!phone.value.trim()) {
                    alert("Enter phone number");
                    return;
                }
            }

            // STEP 5
            if (currentStep === 4) {
                let email = document.querySelector(".ds-input[placeholder='Email Address']");
                if (!email.value.trim()) {
                    alert("Enter email address");
                    return;
                }
            }

            // MOVE NEXT
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        });
    });

    // ===== BACK BUTTON =====
    backBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        });
    });

    // ===== STEP 1 (SINGLE SELECT) =====
    document.querySelectorAll(".ds-option").forEach(option => {
        option.addEventListener("click", () => {
            document.querySelectorAll(".ds-option").forEach(o => o.classList.remove("active"));
            option.classList.add("active");
        });
    });

    // ===== STEP 2 (MULTI SELECT) =====
    document.querySelectorAll(".ds-check-card").forEach(card => {
        card.addEventListener("click", () => {
            card.classList.toggle("active");

            let input = card.querySelector("input");
            input.checked = !input.checked;
        });
    });

    // INIT
    showStep(currentStep);
</script>