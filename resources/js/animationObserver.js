const handleIntersection = (entries, observer, animationClass) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            
            entry.target.classList.add(animationClass);
        }
    });
};

const createIntersectionObserver = (animationClass) => {
    return new IntersectionObserver(
        (entries, observer) => {
            handleIntersection(entries, observer, animationClass);
        },
        {
            root: null,
            rootMargin: "0px",
            threshold: 0.5,
        }
    );
};

const elementsToAnimate = document.querySelectorAll(".animation-trigger");
const elementsToAnimate2 = document.querySelectorAll(".animation-trigger--2");


if (window.innerWidth > 768) {
    const observer = createIntersectionObserver("scale-in-center");
    const observer2 = createIntersectionObserver("slide-in-top");
    

    elementsToAnimate.forEach((element) => {
        observer.observe(element);
    });

    elementsToAnimate2.forEach((element) => {
        observer2.observe(element);
    });
   
}
