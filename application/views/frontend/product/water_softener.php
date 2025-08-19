<style>
    html {
        scroll-behavior: smooth;
    }
    body {
        font-family: 'Inter', sans-serif;
        background-color: #FFFFFF;
    }
    .section-title {
        font-size: 2.25rem;
        font-weight: 800;
        color: #111827;
    }
    .blue-btn {
            background-color: #3B82F6;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: background-color 0.3s ease;
    }
    .blue-btn:hover {
        background-color: #2563EB;
    }
    .outline-btn {
            background-color: white;
            color: #3B82F6;
            border: 1px solid #3B82F6;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: background-color 0.3s ease, color 0.3s ease;
    }
    .outline-btn:hover {
            background-color: #EFF6FF;
    }
    .tab-nav a {
        transition: all 0.3s ease;
        color: #6B7280;
    }
    .tab-nav a.active {
        background-color: #3B82F6;
        color: white;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    }
    .sticky-tabs-container {
        position: -webkit-sticky;
        position: sticky;
        top: 80px; 
        background: transparent;
        z-index: 40;
    }

    /* Custom Swiper Styles */
    .product-slider-container {
        position: relative;
        padding: 0 40px;
    }
    .product-slider {
        padding-bottom: 60px;
    }
    .swiper-button-next, .swiper-button-prev {
        color: #3B82F6; /* Blue-500 */
        background-color: rgba(255, 255, 255, 0.9);
        border: 1px solid #E5E7EB;
        border-radius: 9999px;
        width: 44px;
        height: 44px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        top: 50%;
        transform: translateY(-calc(50% + 30px));
    }

    .swiper-button-prev {
        left: -25px; 
    }
    .swiper-button-next {
        right: -25px;
    }

    .swiper-button-next:after, .swiper-button-prev:after {
        font-size: 1.25rem;
        font-weight: 800;
    }
    .swiper-pagination-bullet-active {
        background: #3B82F6 !important;
    }
    .swiper-slide {
        height: auto;
        display: flex;
        flex-direction: column;
    }
    .product-card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }
</style>

<main>
    <!-- Hero Section -->
    <?php 
        foreach($header as $key => $header) 
        { 
    ?>
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('<?= base_url('uploads/');?>images/headers/<?= $header->images;?>');">
        <div class="absolute inset-0 bg-gradient-to-r from-white via-white/95 to-transparent"></div>
        <div class="relative container mx-auto px-6 h-full flex flex-col justify-center">
            <div class="w-full lg:w-1/2">
                <h3 class="text-sm font-bold tracking-wider uppercase text-blue-600"><?= $header->title;?></h3>
                <h1 class="text-4xl lg:text-5xl font-extrabold mt-2 leading-tight text-blue-600"><?= $header->subtitle;?></h1>
                <p class="mt-4 text-lg text-gray-700 max-w-xl">
                    <?= $header->description;?>
                </p>
            </div>
        </div>
    </section>
    <?php
        }
    ?>

    <!-- Sticky Tabs Container -->
    <div class="sticky-tabs-container">
        <div class="container mx-auto px-6 py-3">
            <div class="bg-white rounded-full shadow-lg p-2 inline-flex items-center space-x-1 tab-nav">
                <a href="#overview-section" class="tab active py-2 px-6 rounded-full font-medium">Overview</a>
                <a href="#benefits-section" class="tab py-2 px-6 rounded-full font-medium">Benefits</a>
                <a href="#our-treatment-system" class="tab py-2 px-6 rounded-full font-medium">Our Treatment System</a>
            </div>
        </div>
    </div>
    
    <!-- Overview Section -->
    <?php 
        foreach($overviews as $key => $overviews) 
        { 
    ?>
    <section id="overview-section" class="container mx-auto px-6 pt-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-2xl font-bold text-gray-800"><?= $overviews->title;?></h3>
                <h2 class="text-4xl font-extrabold text-gray-900 mt-2"><?= $overviews->subtitle;?></h2>
                <p class="mt-4 text-gray-600"><?= $overviews->description;?></p>
            </div>
            <div>
                <img src="<?= base_url('uploads/');?>images/products/ws/<?= $overviews->images;?>" class="rounded-lg shadow-lg" alt="Wanita melihat segelas air keruh">
            </div>
        </div>
    </section>
    <?php
        }
    ?>

    <!-- Did You Know Section -->
    <?php 
        foreach($did_you_know as $key => $did_you_know) 
        { 
    ?>
    <section class="container mx-auto px-6 py-20 text-center">
        <h3 class="text-4xl font-bold text-blue-600"><?= $did_you_know->title;?></h3>
        <p class="mt-4 max-w-4xl mx-auto text-gray-700"><?= $did_you_know->description;?></p>
        <div class="mt-8 flex justify-center px-4">
            <img src="<?= base_url('uploads/');?>images/products/ws/<?= $did_you_know->images;?>" alt="Peta Indonesia" class="rounded-lg w-full max-w-3xl">
        </div>
    </section>
    <?php
        }
    ?>

    <!-- Benefits Section -->
    <section id="benefits-section" class="container mx-auto px-6 pb-20 pt-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-blue-600">Benefits of Using a Water Softener System</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 text-center">
            <?php 
                foreach($benefit as $key => $benefit) 
                { 
            ?>
            <div class="flex flex-col items-center">
                <img src="<?= base_url('uploads/');?>images/products/ws/<?= $benefit->images;?>" alt="Cleaner and Safer Water" class="rounded-full w-32 h-32 object-cover shadow-lg">
                <h3 class="font-bold text-lg mt-4"><?= $benefit->title;?></h3>
                <p class="text-gray-600 text-sm mt-1"><?= $benefit->description;?></p>
            </div>
            <?php
                }
            ?>
        </div>
    </section>

    <!-- Our Treatment System Section -->
    <?php 
        foreach($advantages as $key => $advantages) 
        { 
    ?>
    <section class="container mx-auto px-6 py-20">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800"><?= $advantages->title;?></h2>
        </div>
        <div class="flex justify-center">
            <img src="<?= base_url('uploads/');?>images/products/ws/<?= $advantages->images;?>" onerror="this.onerror=null;this.src='https://placehold.co/1000x500/FEE2E2/B91C1C?text=Before+%26+After+Comparison';" alt="Before and After Comparison" class="rounded-lg shadow-md max-w-4xl w-full h-full object-cover">
        </div>
    </section>
    <?php
        }
    ?>

    <!-- Why Choose Section -->
    <?php 
        foreach($did_you_know2 as $key => $did_you_know2) 
        { 
    ?>
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 text-center">
            <h2 class="section-title"><?= $did_you_know2->title;?></h2>
            <h3 class="mt-2 text-2xl font-semibold text-gray-800">Fresh Water, Long Lasting Equipment</h3>
            <p class="mt-4 max-w-3xl mx-auto text-gray-600"><?= $did_you_know2->description;?></p>
        </div>
    </section>
    <?php
        }
    ?>
    
    <!-- Products Section -->
    <section id="our-treatment-system" class="py-20">
        <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-600">Find the Best Water Treatment System for Your Needs</h2>
            </div>
            <!-- Swiper Slider Container -->
            <div class="product-slider-container">
                <!-- Swiper -->
                <div class="swiper product-slider">
                    <div class="swiper-wrapper">

                       
                    <?php foreach($products as $product) : ?>
                        <div class="swiper-slide">
                            <div class="product-card border border-gray-200 rounded-2xl p-6 text-center">
                                <img src="<?= base_url("uploads/images/products/$product->images") ?>" alt="Water Softener 1" class="mx-auto mb-4 h-48 object-contain">
                                <h3 class="text-xl font-bold"><?= $product->name; ?></h3>
                                <a href="#" class="text-sm text-blue-600 hover:underline mb-4">Spesification</a>
                                <div class="space-y-3 text-sm flex-grow">
                                    <?php foreach($product->details as $detail) : ?>
                                        <div class="flex justify-between border-b pb-2">
                                            <span class="text-gray-600"><?= $detail->key_field ?></span>
                                            <span class="font-semibold"><?= $detail->value_field ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <a href="<?= $product->link ?>" class="blue-btn mt-6 w-full" target="_blank">SHOP NOW</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Add Navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
</main>

<script>
    // Initialize Feather Icons
    feather.replace();

    // Mobile Menu Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', () => {
            console.log('Mobile menu button clicked');
        });
    }
    
    document.addEventListener('DOMContentLoaded', () => {
        const header = document.querySelector('header');
        const tabsContainer = document.querySelector('.sticky-tabs-container');
        const tabs = document.querySelectorAll('.tab-nav a');
        const sections = document.querySelectorAll('main > section[id]');

        if (header && tabsContainer && tabs.length > 0 && sections.length > 0) {
            const headerHeight = header.offsetHeight;
            tabsContainer.style.top = `${headerHeight}px`;
            
            const stickyNavHeight = tabsContainer.offsetHeight;
            const scrollOffset = headerHeight + stickyNavHeight;

            tabs.forEach(tab => {
                tab.addEventListener('click', function (e) {
                    e.preventDefault();
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(targetId);
                    if (targetSection) {
                        const targetPosition = targetSection.getBoundingClientRect().top + window.pageYOffset - scrollOffset;
                        window.scrollTo({ top: targetPosition, behavior: 'smooth' });
                    }
                });
            });

            const onScroll = () => {
                const scrollPosition = window.scrollY;
                sections.forEach(sec => {
                    if (sec.offsetTop - scrollOffset <= scrollPosition && 
                        sec.offsetTop + sec.offsetHeight - scrollOffset > scrollPosition) {
                        tabs.forEach(t => t.classList.remove('active'));
                        const correspondingTab = document.querySelector(`.tab-nav a[href="#${sec.id}"]`);
                        if (correspondingTab) {
                            correspondingTab.classList.add('active');
                        }
                    }
                });
            };
            window.addEventListener('scroll', onScroll);
        }

        const swiper = new Swiper('.product-slider', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 32,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 32
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 32
                }
            },
        });
    });
</script>