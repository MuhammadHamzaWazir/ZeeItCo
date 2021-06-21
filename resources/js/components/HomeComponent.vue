<template>
  <div>
    <app-nav></app-nav>
	  <app-slider></app-slider>
    <main id="main">
	  <app-about></app-about>
    <app-services></app-services>
    <app-portfolio></app-portfolio>
    <app-testimonials></app-testimonials>
    <app-blog></app-blog>
    <app-contact></app-contact>
    
    </main>
    <app-footer></app-footer>
    <app-gotop></app-gotop>
    <app-payload></app-payload>
  </div>  
</template>

<script>
  //import your components here
  import nav from './NavComponent.vue'
  import slider from './SliderComponent.vue'
  import about from './AboutComponent.vue'
  import services from './ServicesComponent.vue'
  import counter from './CounterComponent.vue'
  import portfolio from './PortfolioComponent.vue'
  import testimonials from './TestimonialsComponent.vue'
  import blog from './BlogComponent.vue'
  import contact from './ContactComponent.vue'
  import footer from './FooterComponent.vue'
  import gotop from './GoTopComponent.vue'
  import payload from './PayloadComponent.vue'
  export default {
  	
    components: {
      'app-nav': nav,
      'app-slider' : slider,
      'app-about' : about,
      'app-services': services,
      'app-counter' : counter,
      'app-portfolio' : portfolio,
      'app-testimonials': testimonials,
      'app-blog' : blog,
      'app-contact' : contact,
      'app-footer' : footer,
      'app-gotop' : gotop,
      'app-payload' : payload
    }
    
 }   
</script>