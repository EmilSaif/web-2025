document.addEventListener('DOMContentLoaded', function() {
    const sliders = document.querySelectorAll('.slider-container');
    
    sliders.forEach(slider => {
        const sliderWrapper = slider.closest('.post-slider');
        const images = slider.querySelectorAll('.slider-image');
        const prevBtn = slider.querySelector('.prev');
        const nextBtn = slider.querySelector('.next');
        const counter = sliderWrapper.querySelector('.slider-counter');
        
        let currentIndex = 0;
        
        function updateSlider() {
            images.forEach((img, index) => {
                img.classList.toggle('active', index === currentIndex);
            });
            counter.textContent = `${currentIndex + 1}/${images.length}`;
        }
        
        prevBtn.addEventListener('click', function() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            updateSlider();
        });
        
        nextBtn.addEventListener('click', function() {
            currentIndex = (currentIndex + 1) % images.length;
            updateSlider();
        });
        
        // Добавляем обработчики свайпов для мобильных устройств
        let touchStartX = 0;
        let touchEndX = 0;
        
        slider.addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        }, false);
        
        slider.addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, false);
        
        function handleSwipe() {
            if (touchEndX < touchStartX - 50) {
                // Свайп влево - вперед
                currentIndex = (currentIndex + 1) % images.length;
            }
            if (touchEndX > touchStartX + 50) {
                // Свайп вправо - назад
                currentIndex = (currentIndex - 1 + images.length) % images.length;
            }
            updateSlider();
        }
        
        // Инициализация
        updateSlider();
    });
});