<!-- Footer (UPDATED) -->
    <footer class="bg-[#0B112B] text-white">
        <div class="container mx-auto px-6 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Column 1: Logo -->
                <div class="lg:col-span-3">
                     <img src="<?= base_url('uploads/');?>images/profiles/png5.png" alt="Aqualife Logo White" class="h-14 w-auto brightness-0 invert">
                </div>
                
                 <!-- Column 2: Produk Links -->
                <div class="lg:col-span-2">
                     <h4 class="font-bold tracking-wider mb-4 pb-2 border-b-2 border-slate-700 inline-block">PRODUCT</h4>
                    <ul class="space-y-3 mt-4 text-gray-300">
                        <?php 
                            foreach($categories as $key => $categories) 
                            { 
                        ?>
                        <li><a href="<?= base_url();?>frontend/<?= $categories->path;?>" class="hover:text-white transition-colors"><?= $categories->name;?></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
                
                <!-- Column 3: Aqualife Links -->
                <div class="lg:col-span-2">
                    <h4 class="font-bold tracking-wider mb-4 pb-2 border-b-2 border-slate-700 inline-block">AQUALIFE</h4>
                    <ul class="space-y-3 mt-4 text-gray-300">
                        <li><a href="index.html#about" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Why Aqualife</a></li>
                        <li><a href="index.html#contact" class="hover:text-white transition-colors">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 4: Social & Subscription -->
                 <div class="lg:col-span-5">
                    <h4 class="font-bold tracking-wider mb-4 pb-2 border-b-2 border-slate-700 inline-block">FOLLOW US ON SOCIAL MEDIA!</h4>
                     <div class="flex space-x-3 mt-4">
                        <?php 
                            foreach($companies_sosmed as $key => $companies_sosmed) 
                            { 
                        ?>
                        <a href="<?= $companies_sosmed->account;?>" target="_blank" class="text-gray-300 hover:text-white border border-slate-600 rounded-full p-2 transition-colors"><i data-feather="<?= $companies_sosmed->icon;?>" class="h-5 w-5"></i></a>
                        <?php
                            }
                        ?>
                     </div>
                    <p class="text-gray-400 text-sm my-4">Sign up to unlock 5% off your first order and be the first to learn about exclusive discounts and new products.</p>
                    <form>
                        <div class="flex border border-slate-600 focus-within:ring-2 focus-within:ring-blue-500 focus-within:border-blue-500 transition-all">
                            <input type="email" placeholder="Enter Your Email" class="w-full bg-transparent text-white px-4 py-2 focus:outline-none">
                            <button class="bg-[#1E293B] hover:bg-blue-600 text-white px-6 py-2 font-semibold transition-colors">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-12 pt-6 text-left text-gray-500 text-sm">
                <p>&copy; 2025, Aqualife IDN. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating Chat Button -->
    <?php
        $query = $this->db->query("SELECT * FROM abouts LIMIT 1");
        if ($query->num_rows() > 0) 
        {
            $query = $query->result_array();
            foreach($query as $data):
    ?>
    <div class="fixed bottom-5 right-5 z-50">
        <a href="<?php echo $data['phone']; ?>" target="_blank">
            <button class="bg-blue-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg hover:bg-blue-700 transition">
                <i data-feather="message-square" class="h-7 w-7"></i>
            </button>
        </a>
    </div>
    <?php 
        
        endforeach;
        }
    ?>

    <link rel="stylesheet" href="<?= base_url() ?>assets/hybrix/js/swiper-bundle.min.js" />

    <script>
        feather.replace();
    </script>

    <script>
        base_url = '<?= base_url() ?>';
        
        $(document).ready(function() 
        {
            $("#consultation-form").submit(function(e) {
                e.preventDefault();
                
                your-name = $('#your-name');
                last-name = $('#last-name');
                address = $('#address');
                city = $('#city');
                state-province = $('#state-province');
                email = $('#email');
                phone-number = $('#phone-number');
                consultation-time = $('#consultation-time');
                masalah = $('#masalah');

                i = confirm('Submit this record?');

                if (i==false) 
                {
                    return false;          
                }

                else
                {
                    $.ajax(
                    {
                        url: "<?php echo base_url("frontend/Index/simpan_ajax");?>",
                        type: "POST",
                        data: form,
                        cache: false,

                        success: function(dataResult)
                        {
                            var dataResult = JSON.parse(dataResult);
                            
                            if(dataResult.statusCode==200)
                            {
                                alert('Simpan berhasil!');
                                window.location = base_url + 'frontend/Index';                 
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
