<style>
    html {
        scroll-behavior: smooth;
    }
    body {
        font-family: 'Inter', sans-serif;
        background-color: #FFFFFF;
    }
    .section-title {
        font-size: 2.25rem; /* 36px */
        font-weight: 800;
        color: #111827; /* Dark Gray */
    }
    .blue-btn {
            background-color: #3B82F6; /* Blue-500 */
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: background-color 0.3s ease;
    }
    .blue-btn:hover {
        background-color: #2563EB; /* Blue-600 */
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
            background-color: #EFF6FF; /* Blue-50 */
    }
    
    .tab-nav a {
        transition: all 0.3s ease;
        color: #6B7280; /* gray-500 */
    }
    .tab-nav a.active {
        background-color: #3B82F6; /* blue-500 */
        color: white;
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    }
    
    .sticky-tabs-container {
        position: -webkit-sticky;
        position: sticky;
        top: 80px; 
        z-index: 40;
        margin-top: -4rem;
        height: 80px;
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
        <div class="container mx-auto px-6">
            <div class="bg-white rounded-full shadow-lg p-2 inline-flex items-center space-x-1 tab-nav">
                <a href="#overview-section" class="tab active py-2 px-6 rounded-full font-medium">Overview</a>
                <a href="#product-section" class="tab py-2 px-6 rounded-full font-medium">Our Product</a>
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
                <h3 class="text-2xl font-bold text-gray-800"><?= $overviews->subtitle;?></h3>
                <p class="mt-4 text-gray-600"><?= $overviews->description;?></p>
            </div>
            <div>
                <img src="<?= base_url('uploads/');?>images/products/dw/<?= $overviews->images;?>" class="rounded-lg shadow-lg" alt="Wanita melihat segelas air keruh">
            </div>
        </div>
        <?php 
            foreach($did_you_know as $key => $did_you_know) 
            { 
        ?>
        <div class="text-center mt-20">
            <h2 class="text-4xl font-bold text-blue-600"><?= $did_you_know->title;?></h2>
            <img src="<?= base_url('uploads/');?>images/products/dw/<?= $did_you_know->images;?>" onerror="this.onerror=null;this.src='https://placehold.co/1200x500/F3F4F6/9CA3AF?text=RO+Process+Diagram';" alt="Reverse Osmosis Process Diagram" class="mx-auto mt-8 rounded-lg shadow-md">
            <p class="mt-8 max-w-4xl mx-auto text-gray-600">
                <?= $did_you_know->description;?>
            </p>
        </div>
        <?php
            }
        ?>
    </section>
    <?php
        }
    ?>

    <!-- Our Products Section -->

    <section id="product-section" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800">Not just water filtration, but a healthier future.</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php 
                    foreach($did_you_know2 as $key => $did_you_know2) 
                    { 
                ?>
                <a href="onyx.html" class="block relative rounded-2xl overflow-hidden h-[700px] shadow-xl group text-white">
                    <img src="<?= base_url('uploads/');?>images/products/dw/<?= $did_you_know2->image;?>" class="absolute w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out" alt="Onyx Water Dispenser">
                    <div class="absolute bottom-0 left-0 right-0 h-3/5 bg-gradient-to-t from-black/80 to-transparent"></div>
                    <div class="relative h-full flex flex-col justify-end items-center text-center p-8">
                        <h3 class="text-3xl font-bold"><?= $did_you_know2->title;?></h3>
                        <p class="mt-2 text-sm max-w-md"><?= $did_you_know2->description;?></p>
                    </div>
                </a>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
 

    <!-- Benefits Section -->
    <section id="benefits-section" class="container mx-auto px-6 pb-20 pt-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-blue-600">Benefits of Using a Water Treatment System</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 text-center">
            <?php 
                foreach($benefit as $key => $benefit) 
                { 
            ?>
            <div class="flex flex-col items-center">
                <img src="<?= base_url('uploads/');?>images/products/dw/<?= $benefit->images;?>" alt="<?= $benefit->title;?>" class="rounded-full w-32 h-32 object-cover shadow-lg">
                <h3 class="font-bold text-lg mt-4"><?= $benefit->title;?></h3>
                <p class="text-gray-600 text-sm mt-1"><?= $benefit->description;?></p>
            </div>
            <?php
                }
            ?>
        </div>

        
        <div class="mt-20 grid md:grid-cols-2 gap-8">
            <?php 
                foreach($advantages as $key => $advantages) 
                { 
            ?>
            <div class="relative rounded-2xl overflow-hidden shadow-lg">
                <img src="<?= base_url('uploads/');?>images/products/dw/<?= $advantages->images;?>" alt="<?= $advantages->title;?>" class="w-full h-full object-cover">
                <div class="absolute top-4 left-4">
                    <h4 class="bg-blue-600 text-white text-sm font-bold py-2 px-4 rounded-md"><?= $advantages->title;?></h4>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        
    </section>
    
    <!-- Why Choose Section / Our Treatment System (MODIFIED) -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-blue-600">Why Choose Aqualife RO for Drinking Water?</h2>
            </div>
            <!-- MODIFIED: Wrapped grid in a centered flex container to make items closer -->
            <div class="flex justify-center">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-8 lg:gap-x-16 gap-y-12 text-center max-w-5xl">
                    <?php 
                        foreach($wcu as $key => $wcu) 
                        { 
                    ?>
                    <div class="flex flex-col items-center">
                        <img src="<?= base_url('uploads/');?>images/products/dw/<?= $wcu->images;?>" alt="On Demand Purity" class="rounded-full w-48 h-48 object-cover shadow-lg mb-6">
                        <h3 class="font-bold text-xl mb-2"><?= $wcu->title;?></h3>
                        <!-- MODIFIED: Text updated -->
                        <p class="text-gray-600 text-sm max-w-xs"><?= $wcu->description;?></p>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Find Product Section -->
    <section id="our-treatment-system" class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-blue-600">Find the Best RO Drinking Water for Your Needs</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
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
        </div>
    </section>
</main>

<script>
    // Initialize Feather Icons
    feather.replace();

    // Mobile Menu Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    if (mobileMenuButton) {
        const mobileMenu = document.querySelector('header nav');
        mobileMenuButton.addEventListener('click', () => {
            if(mobileMenu) mobileMenu.classList.toggle('hidden');
        });
    }
    
    // --- Sticky Tabs & Smooth Scrolling Logic ---
    document.addEventListener('DOMContentLoaded', () => {
        const header = document.querySelector('header');
        const tabsContainer = document.querySelector('.sticky-tabs-container');
        const tabs = document.querySelectorAll('.tab-nav a');
        // Select sections that are direct children of main and have an ID
        const sections = document.querySelectorAll('main > section[id]');

        if (!header || !tabsContainer || tabs.length === 0 || sections.length === 0) {
            console.error('Required elements for sticky navigation not found.');
            return;
        }

        // Dynamically set the 'top' position for the sticky container based on header height
        const headerHeight = header.offsetHeight;
        tabsContainer.style.top = `${headerHeight}px`;
        
        const stickyNavHeight = tabsContainer.offsetHeight;
        const scrollOffset = headerHeight + stickyNavHeight;

        // --- CLICK HANDLER ---
        tabs.forEach(tab => {
            tab.addEventListener('click', function (e) {
                e.preventDefault();

                // 1. Update active class on tabs immediately
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                // 2. Scroll to the target section
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);
                
                if (targetSection) {
                    // Calculate position, subtracting the height of the header and the sticky nav bar
                    const targetPosition = targetSection.getBoundingClientRect().top + window.pageYOffset - scrollOffset;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // --- SCROLL HANDLER ---
        // Updates the active tab as the user scrolls
        const onScroll = () => {
            const scrollPosition = window.scrollY;

            sections.forEach(sec => {
                // Check if the section is within the viewport, considering the offset
                if (sec.offsetTop - scrollOffset <= scrollPosition && 
                    sec.offsetTop + sec.offsetHeight - scrollOffset > scrollPosition) {
                    
                    // Remove active class from all tabs
                    tabs.forEach(t => t.classList.remove('active'));
                    
                    // Add active class to the corresponding tab
                    const correspondingTab = document.querySelector(`.tab-nav a[href="#${sec.id}"]`);
                    if (correspondingTab) {
                        correspondingTab.classList.add('active');
                    }
                }
            });
        };

        window.addEventListener('scroll', onScroll);
    });
</script>