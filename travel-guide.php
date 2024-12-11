<?php
    /**
     * Template Name: Travel Guide
     * Description: A custom page for travel guide.
     */
    get_header(); 
?>

<div class="about-main-content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/travel.jpg'); background-position: center; background-size:cover">
    <div class="about-text travel-text">
        <h2>Things to remember when traveling</h2>
    </div>   
</div>

<div class="travel-guide-container">
    <div class="travel-guide-content">
        <i class="fa-solid fa-shirt"></i>        
        <h3>Climate and Packing Tips</h3>
        <p>       
            Eastern Visayas, or Region 8, is known for its tropical climate, characterized by warm temperatures and humidity year-round. The rainy season typically runs from June to November, so travelers visiting during these months should come prepared with light, breathable clothing and rain gear such as umbrellas or jackets. Comfortable shoes are essential, especially if you plan to explore the region’s natural attractions like waterfalls, beaches, and hiking trails. For those planning on visiting the region’s beautiful islands or beaches, don’t forget to pack your swimwear. Given the tropical environment, staying hydrated is important, so always carry a water bottle with you.
        </p>     
    </div>

    <div class="travel-guide-content">
        <i class="fa-solid fa-lock"></i>        
        <h3>Security and Safety</h3>
        <p>       
            While Region 8 is generally safe for travelers, it’s always wise to stay vigilant, especially in urban areas such as Tacloban City. Petty thefts can occur, so be mindful of your belongings and avoid walking alone in poorly lit or isolated areas at night. If you're traveling to remote spots, it’s a good idea to inform someone of your whereabouts, and check local travel advisories before heading to more rural or undeveloped areas. When using public transport, like jeepneys and buses, keep an eye on your valuables to avoid pickpocketing. For trips to more rural areas, consider hiring local guides or reputable transportation services for added safety.
        </p>      
    </div>

    <div class="travel-guide-content">
        <i class="fa-solid fa-masks-theater"></i>     
        <h3>Local Customs and Etiquette</h3>
        <p>       
            The people of Region 8 are known for their friendliness and warmth. Taking the time to engage with locals can enhance your experience. When meeting someone for the first time, offering a friendly "Kamusta?" (How are you?) or "Salamat" (Thank you) can go a long way in fostering goodwill. The culture in the region is diverse, and while most people speak Waray, Filipino (Tagalog) is widely understood. In terms of dress, modesty is appreciated, especially when visiting religious sites or rural areas. While the region is laid-back, being respectful of local customs will make your visit more enjoyable.
        </p>      
    </div>

    <div class="travel-guide-content">
        <i class="fa-solid fa-van-shuttle"></i>       
        <h3> Transportation</h3>
        <p>            
            Getting around Region 8 can vary depending on where you're staying. In urban areas like Tacloban, public transportation is readily available, with jeepneys and buses being the most common modes of transport. However, in more remote areas, public transportation can be limited, so you'll often rely on motorbikes, tricycles, or private vehicles. When using public transport, be mindful of your surroundings, as pickpocketing can sometimes be a concern. In rural areas, consider renting a motorcycle or hiring a local guide if you’re unfamiliar with the terrain. Always check the condition of the vehicles and ensure safety measures, like helmets for motorcycles, are in place.
        </p>      
    </div>

    <div class="travel-guide-content">
        <i class="fa-solid fa-wifi"></i>       
        <h3>Technology and Connectivity</h3>
        <p>       
            Internet connectivity in Region 8 can be spotty, especially in remote or rural locations. In urban centers such as Tacloban, you'll find Wi-Fi available in most cafes, restaurants, and hotels. However, if you're venturing out to more secluded areas or islands, it's advisable to download offline maps or guides for navigation. To stay connected, consider purchasing a local SIM card from either Globe or Smart, which provide coverage in most areas of the region. This will help with internet access, as well as calls and texts when needed.
        </p>      
    </div>

    <div class="travel-guide-content">
        <i class="fa-solid fa-kit-medical"></i>      
        <h3>Health and Well-being</h3>
        <p>       
            Maintaining your health while traveling is crucial. The tropical climate of Region 8 means that dehydration can happen quickly, so drink plenty of water throughout the day. Insect repellent is recommended, especially when visiting natural areas like forests and waterfalls where mosquitoes are more prevalent. It’s also a good idea to pack sunscreen to protect your skin from the intense sun. If you plan on exploring rural areas or engaging in outdoor activities, consider bringing a small first-aid kit with basic medications, bandages, and antiseptic.
        </p>      
    </div>

    <div class="travel-guide-content">
        <i class="fa-brands fa-pagelines"></i>       
        <h3>Environmental Awareness and Eco-tourism</h3>
        <p>       
            Eastern Visayas is home to several natural wonders, and many of these places are protected by environmental conservation efforts. As a responsible traveler, it's important to minimize your ecological footprint. Always dispose of your waste properly and avoid using plastic bags where possible. If you're visiting marine reserves or going snorkeling or diving, respect the coral reefs and marine life by refraining from touching or disturbing the underwater environment. Many of the region's natural attractions, such as beaches and waterfalls, thrive because of conservation efforts, so being mindful of local eco-tourism initiatives will help preserve these beautiful places for future generations.
        </p>      
    </div>

    <div class="travel-guide-content">
        <i class="fa-solid fa-utensils"></i>       
        <h3>Cuisine and Local Delicacies</h3>
        <p>       
            Eastern Visayas is a paradise for food lovers, with an array of fresh seafood and traditional Filipino dishes. If you're a seafood enthusiast, you’ll find an abundance of delicious options, including sinarapan (tiny fish), lechon (roast pig), and various fish dishes. Don’t miss out on tasting the region’s local delicacies, such as binagol (a dessert made with sticky rice, coconut milk, and brown sugar wrapped in taro leaves). Street food is also a huge part of the local culture, and you’ll find vendors offering everything from kwek-kwek (quail eggs coated in batter) to buko juice (fresh coconut juice). Make sure to visit local markets or food stalls to get an authentic taste of Region 8.
        </p>      
    </div>

    <div class="travel-guide-content">
        <i class="fa-solid fa-fingerprint"></i>      
        <h3>Responsible Tourism</h3>
        <p>       
            As you explore Region 8, it’s important to be a responsible tourist. This means respecting local traditions and the environment. While it’s tempting to take beautiful souvenirs, it's always best to choose ethically sourced items that support local artisans. Avoid disturbing wildlife or damaging natural sites, and ensure that your presence has a positive impact on the places you visit. Eastern Visayas offers plenty of opportunities to experience unspoiled nature, so treating it with respect will help keep it pristine for future travelers.
        </p>      
    </div>
</div>

<div class="destinations gray-bg">
    <h3>Destinations</h3>
    <div class="posts-container">
        <?php
            // Custom query to fetch 3 latest posts
            $args = array(
                'posts_per_page' => 3,
                'post_status'    => 'publish', // Only show published posts
            );
            $latest_posts = new WP_Query($args);

            // Check if there are any posts
            if ($latest_posts->have_posts()) :
                while ($latest_posts->have_posts()) : $latest_posts->the_post();
        ?>

        <div class="post-card">
            <div class="post-image">
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="post-content">
                <h4>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h4>
                <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                </p>
            </div>
        </div>
        
        <?php
            endwhile;
            wp_reset_postdata(); // Reset the query
            else : echo '<p>No posts found</p>';
        endif;
        ?>
    </div>
    <button class="green-button"><a href="<?php echo site_url('/destinations'); ?>" class="white-text">View More</a></button>
</div>

<?php
get_footer();
?>