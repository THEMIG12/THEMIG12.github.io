(function () {
  const container = document.getElementById("carouselContainer");
  const slides = container.querySelectorAll(".carousel-slide");
  const totalSlides = slides.length; // 12 slides
  let currentIndex = 0;
  let autoPlayInterval = null;
  let isTransitioning = false;
  let startX = 0;
  let isDragging = false;
  let touchStartX = 0;
  let touchCurrentX = 0;

  function getVisibleSlides() {
    if (window.innerWidth <= 480) return 1;
    if (window.innerWidth <= 768) return 2;
    if (window.innerWidth <= 1024) return 3;
    return 4;
  }

  function getSlideWidth() {
    return 100 / getVisibleSlides();
  }

  function getMaxIndex() {
    return totalSlides - getVisibleSlides();
  }

  function updateTransform(animate = true) {
    const offset = currentIndex * getSlideWidth();
    container.style.transition = animate ? "transform 0.5s ease" : "none";
    container.style.transform = `translateX(${offset}%)`;
  }

  function goToSlide(index) {
    if (isTransitioning) return;
    isTransitioning = true;

    if (index > getMaxIndex()) {
      index = 0;
    }
    if (index < 0) {
      index = getMaxIndex();
    }

    currentIndex = index;
    updateTransform(true);

    setTimeout(() => {
      isTransitioning = false;
    }, 500);
  }

  function nextSlide() {
    if (isTransitioning) return;
    if (currentIndex >= getMaxIndex()) {
      goToSlide(0);
    } else {
      goToSlide(currentIndex + 1);
    }
  }

  function prevSlide() {
    if (isTransitioning) return;
    if (currentIndex <= 0) {
      goToSlide(getMaxIndex());
    } else {
      goToSlide(currentIndex - 1);
    }
  }

  document.getElementById("nextBtn").addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    resetAutoPlay();
    nextSlide();
  });

  document.getElementById("prevBtn").addEventListener("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    resetAutoPlay();
    prevSlide();
  });

  container.addEventListener("mousedown", function (e) {
    startX = e.pageX;
    isDragging = true;
    container.classList.add("grabbing");
    container.style.transition = "none";
    resetAutoPlay();
  });

  document.addEventListener("mousemove", function (e) {
    if (!isDragging) return;
    const diff = e.pageX - startX;
    const currentOffset = currentIndex * getSlideWidth();
    const newOffset = currentOffset + (diff / container.parentElement.offsetWidth) * 100;
    container.style.transform = `translateX(${newOffset}%)`;
  });

  document.addEventListener("mouseup", function (e) {
    if (!isDragging) return;
    isDragging = false;
    container.classList.remove("grabbing");

    const diff = e.pageX - startX;
    const threshold = 50;

    if (diff > threshold) {
      prevSlide();
    } else if (diff < -threshold) {
      nextSlide();
    } else {
      updateTransform(true);
      isTransitioning = false;
    }

    startAutoPlay();
  });

  container.addEventListener("touchstart", function (e) {
    touchStartX = e.touches[0].clientX;
    isDragging = true;
    container.style.transition = "none";
    resetAutoPlay();
  }, { passive: true });

  container.addEventListener("touchmove", function (e) {
    if (!isDragging) return;
    touchCurrentX = e.touches[0].clientX;
    const diff = touchCurrentX - touchStartX;
    const currentOffset = currentIndex * getSlideWidth();
    const newOffset = currentOffset + (diff / container.parentElement.offsetWidth) * 100;
    container.style.transform = `translateX(${newOffset}%)`;
  }, { passive: true });

  container.addEventListener("touchend", function (e) {
    if (!isDragging) return;
    isDragging = false;

    const diff = touchCurrentX - touchStartX;
    const threshold = 50;

    if (diff > threshold) {
      prevSlide();
    } else if (diff < -threshold) {
      nextSlide();
    } else {
      updateTransform(true);
      isTransitioning = false;
    }

    startAutoPlay();
  }, { passive: true });

  function startAutoPlay() {
    if (autoPlayInterval) clearInterval(autoPlayInterval);
    autoPlayInterval = setInterval(function () {
      nextSlide();
    }, 6000);
  }

  function resetAutoPlay() {
    if (autoPlayInterval) clearInterval(autoPlayInterval);
    startAutoPlay();
  }

  container.addEventListener("mouseenter", function () {
    if (autoPlayInterval) clearInterval(autoPlayInterval);
  });

  container.addEventListener("mouseleave", function () {
    startAutoPlay();
  });

  let resizeTimeout;
  window.addEventListener("resize", function () {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(function () {
      updateTransform(false);
    }, 200);
  });

  updateTransform(false);
  startAutoPlay();
})();