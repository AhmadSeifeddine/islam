<div id="loading-screen" class="loading-screen-fade loading-screen-bg"
    style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; z-index: 9999; opacity: 1; transition: opacity 0.5s ease-in-out;">
    <div class="loading-container fade-in">
        <div class="logo-container">
            <x-logo width="250px" class="floating-logo" />
        </div>
        <div class="progress-container">
            <div class="progress-bar"></div>
            <div class="progress-glow"></div>
        </div>
    </div>
</div>

<style>
    .loading-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 2rem;
    }

    .logo-container {
        animation: float 3s ease-in-out infinite;
        opacity: 0;
        animation-delay: 0.3s;
        animation: fadeIn 0.8s ease-out forwards 0.3s,
            float 3s ease-in-out infinite 0.8s;
    }

    .floating-logo {
        filter: drop-shadow(0 4px 12px rgba(var(--primary-rgb), 0.3));
    }

    .progress-container {
        position: relative;
        width: 300px;
        height: 4px;
        background: rgba(218, 165, 32, 0.1);
        border-radius: 6px;
        overflow: hidden;
        box-shadow: 0 1px 10px rgba(218, 165, 32, 0.1);
        opacity: 0;
        animation: fadeIn 0.8s ease-out forwards 0.6s;
    }

    .progress-bar {
        width: 0%;
        height: 100%;
        background: linear-gradient(90deg,
                rgba(218, 165, 32, 0.9),
                rgba(255, 215, 0, 1) 50%,
                rgba(218, 165, 32, 0.9));
        transition: width 0.4s ease-out;
        border-radius: 6px;
        position: relative;
        z-index: 2;
    }

    .progress-glow {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg,
                transparent 0%,
                rgba(255, 215, 0, 0.3) 50%,
                transparent 100%);
        animation: glow 2s linear infinite;
        z-index: 1;
    }

    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    @keyframes glow {
        0% {
            transform: translateX(-100%);
        }

        100% {
            transform: translateX(100%);
        }
    }

    .fade-in {
        opacity: 0;
        animation: fadeIn 0.8s ease-out forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    [data-bs-theme="dark"] .loading-screen-bg {
        background-color: var(--background-dark);
    }

    [data-bs-theme="light"] .loading-screen-bg {
        background-color: var(--background-light);
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const progressBar = document.querySelector('.progress-bar');
        let loadingComplete = false;

        // Initialize progress at 15%
        progressBar.style.width = '15%';

        // Simulate progress until real progress kicks in
        let currentProgress = 15;
        const progressInterval = setInterval(() => {
            if (currentProgress < 90) {
                currentProgress += Math.random() * 3;
                progressBar.style.width = `${currentProgress}%`;
            }
        }, 200);

        // Track real page load progress
        const startTime = performance.now();
        const duration = 2000; // Minimum loading time in ms

        function updateProgress() {
            const currentTime = performance.now();
            const elapsed = currentTime - startTime;
            const progress = Math.min((elapsed / duration) * 100, 90);

            if (progress < 90) {
                progressBar.style.width = `${progress}%`;
                requestAnimationFrame(updateProgress);
            }
        }

        requestAnimationFrame(updateProgress);

        // Ensure the loading screen completes
        window.addEventListener('load', function() {
            clearInterval(progressInterval);

            // Ensure minimum loading time
            setTimeout(() => {
                progressBar.style.width = '100%';
                loadingComplete = true;

                setTimeout(function() {
                    const loadingScreen = document.getElementById('loading-screen');
                    loadingScreen.style.opacity = '0';
                    setTimeout(function() {
                        loadingScreen.style.display = 'none';
                    }, 500);
                }, 300);
            }, Math.max(0, duration - (performance.now() - startTime)));
        });

        // Fallback in case load event doesn't fire
        setTimeout(function() {
            if (!loadingComplete) {
                clearInterval(progressInterval);
                progressBar.style.width = '100%';
                const loadingScreen = document.getElementById('loading-screen');
                loadingScreen.style.opacity = '0';
                setTimeout(function() {
                    loadingScreen.style.display = 'none';
                }, 500);
            }
        }, 10000);
    });
</script>
