
var mode = KTThemeMode.getMode();

document.addEventListener('mousemove', (e) => {
    // Create multiple particles for a richer effect
    for (let i = 0; i < 4; i++) {
        const particle = document.createElement('div');
        particle.className = 'cursor-particle';

        // Random size for each particle
        const size = Math.random() * 15 + 5;

        // Random offset from cursor
        const offsetX = (Math.random() - 0.5) * 20;
        const offsetY = (Math.random() - 0.5) * 20;

        // Set color based on mode
        const color = mode === 'light' ? 'rgb(255,0,0)' : 'rgb(255,215,0)';

        particle.style.cssText = `
            position: fixed;
            width: ${size}px;
            height: ${size}px;
            pointer-events: none;
            left: ${e.clientX + offsetX}px;
            top: ${e.clientY + offsetY}px;
            background: radial-gradient(circle at center,
                ${color} 0%,
                ${color.replace('rgb', 'rgba').replace(')', ',0.8)')} 25%,
                ${color.replace('rgb', 'rgba').replace(')', ',0.4)')} 50%,
                ${color.replace('rgb', 'rgba').replace(')', ',0)')} 100%
            );
            border-radius: 50%;
            box-shadow: 0 0 15px ${color.replace('rgb', 'rgba').replace(')', ',0.8)')},
                       0 0 30px ${color.replace('rgb', 'rgba').replace(')', ',0.6)')},
                       0 0 45px ${color.replace('rgb', 'rgba').replace(')', ',0.4)')};
            opacity: 0.8;
            transform: scale(1) translate(0, 0);
            transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        `;

        document.body.appendChild(particle);

        setTimeout(() => {
            particle.style.opacity = '0';
            particle.style.transform = `scale(0.2) translate(
                ${(Math.random() - 0.5) * 100}px,
                ${-Math.random() * 100}px
            )`;
            setTimeout(() => particle.remove(), 600);
        }, 50);
    }
});

// Add required CSS
const style = document.createElement('style');
style.textContent = `
    .cursor-particle {
        z-index: 9999;
        mix-blend-mode: screen;
        will-change: transform, opacity;
    }

    /* Add a subtle glow to the entire page */
    body::after {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        background: radial-gradient(circle at var(--x, 50%) var(--y, 50%),
            ${mode === 'light' ? 'rgba(255,0,0,0.05)' : 'rgba(255,215,0,0.05)'} 0%,
            transparent 20%);
        z-index: 9998;
        transition: opacity 0.3s;
    }
`;
document.head.appendChild(style);

// Update the global glow effect
document.addEventListener('mousemove', (e) => {
    const x = (e.clientX / window.innerWidth) * 100;
    const y = (e.clientY / window.innerHeight) * 100;
    document.body.style.setProperty('--x', x + '%');
    document.body.style.setProperty('--y', y + '%');
});
