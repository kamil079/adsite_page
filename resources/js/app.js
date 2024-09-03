import Splide from '@splidejs/splide';

// Ensure this runs after the DOM is fully loaded
document.addEventListener('DOMContentLoaded', () => {
    new Splide('.splide', {
        type       : 'loop',        
        perPage    : 2,             
        gap        : '64px',         
        pagination : true,   
        arrows     : false,       
        breakpoints: {
            1024: {                  
                perPage: 2,  
                gap: '24px',         
            },
            768: {                  
                perPage: 1,          
            },
        },
    }).mount();



    const toggleBurger = () => {
        
    }
});
