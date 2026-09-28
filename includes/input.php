<div class="showbody">
    <form method="post" action="">
        <div class="input-group-wrapper">
            <label for="num">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="4" y1="9" x2="20" y2="9"></line>
                    <line x1="4" y1="15" x2="20" y2="15"></line>
                    <line x1="10" y1="3" x2="8" y2="21"></line>
                    <line x1="16" y1="3" x2="14" y2="21"></line>
                </svg>
                Enter Target Number
            </label>
            
            <div class="input-container">
                <div class="input-field-box">
                    <div class="input-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                            <rect x="9" y="9" width="2" height="2"></rect>
                            <rect x="13" y="9" width="2" height="2"></rect>
                            <rect x="9" y="13" width="2" height="2"></rect>
                            <rect x="13" y="13" width="2" height="2"></rect>
                        </svg>
                    </div>
                    <input
                        autofocus
                        type="number"
                        id="num"
                        name="num"
                        required
                        placeholder="e.g. 153, 28, 192..."
                        value="<?php echo isset($_POST['num']) ? htmlspecialchars($_POST['num']) : ''; ?>"
                    />
                </div>
                
                <button class="btn" type="submit" name="result">
                    <span>Run Analysis</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                    </svg>
                </button>
            </div>

            <div class="presets-container">
                <span class="preset-label">Quick Test Presets:</span>
                <span class="preset-chip" onclick="fillPreset(6)">6</span>
                <span class="preset-chip" onclick="fillPreset(153)">153</span>
                <span class="preset-chip" onclick="fillPreset(145)">145</span>
                <span class="preset-chip" onclick="fillPreset(25)">25</span>
                <span class="preset-chip" onclick="fillPreset(192)">192</span>
                <span class="preset-chip" onclick="fillPreset(19)">19</span>
            </div>
        </div>
    </form>
</div>

<div class="output">
    <div class="output-header">
        <p>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
            </svg>
            Analysis Result
        </p>
        <?php if (isset($res) && $res !== ''): ?>
            <span class="result-badge <?php echo (strpos($res, 'is a') !== false || strpos($res, 'is an Evil') !== false) ? 'success' : 'info'; ?>">
                <?php echo (strpos($res, 'is a') !== false || strpos($res, 'is an Evil') !== false) ? '✔ Property Verified' : 'ℹ Analysis Complete'; ?>
            </span>
        <?php endif; ?>
    </div>

    <div class="result">
        <?php if (isset($res) && $res !== ''): ?>
            <?php echo htmlspecialchars($res); ?>
        <?php else: ?>
            <span class="result-placeholder">Enter a number above and click "Run Analysis" to view mathematical properties.</span>
        <?php endif; ?>
    </div>
</div>

<script>
function fillPreset(val) {
    const input = document.getElementById('num');
    if (input) {
        input.value = val;
        input.focus();
    }
}
</script>