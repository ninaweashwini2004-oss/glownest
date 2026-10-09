<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;


class ProductSeeder extends Seeder{


    public function run(): void
    {
        $products = [

            // 1
            [
                'name' => 'SkinKraft Face Toner',
                'category' => 'skincare',
                'slug' => 'skinkraft-face-toner',
                'description' => 'Refreshing face toner for healthy and glowing skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/toner/toner1.jpg',
                'stock' => 50,
            ],

            // 2
            [
                'name' => 'Aloe Vera Face Toner',
                'category' => 'skincare',
                'slug' => 'aloe-vera-face-toner',
                'description' => 'Refreshing aloe vera face toner for healthy and glowing skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/toner/toner2.jpg',
                'stock' => 50,
            ],

            // 3
            [
                'name' => 'Glow Fusion Face Toner',
                'category' => 'skincare',
                'slug' => 'glow-fusion-face-toner',
                'description' => 'Glow enhancing face toner for fresh looking skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/toner/toner3.webp',
                'stock' => 50,
            ],

            // 4
            [
                'name' => 'Rice Ceramide Toner',
                'category' => 'skincare',
                'slug' => 'rice-ceramide-toner',
                'description' => 'Rice ceramide toner for hydrated and healthy skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/toner/toner4.webp',
                'stock' => 50,
            ],

            // 5
            [
                'name' => 'Overnight Repair Face Mask',
                'category' => 'skincare',
                'slug' => 'overnight-repair-face-mask',
                'description' => 'Overnight repair face mask for nourished skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/facemasks/facemask1.jpg',
                'stock' => 50,
            ],

            // 6
            [
                'name' => 'Kumkumadi Face Mask pack of 2',
                'category' => 'skincare',
                'slug' => 'kumkumadi-face-mask-pack-of-2',
                'description' => 'Kumkumadi face mask for glowing and refreshed skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/facemasks/facemask2.jpg',
                'stock' => 50,
            ],

            // 7
            [
                'name' => 'PBA Face Mask',
                'category' => 'skincare',
                'slug' => 'pba-face-mask',
                'description' => 'Refreshing face mask for glowing skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/facemasks/facemask3.jpg',
                'stock' => 50,
            ],

            // 8
            [
                'name' => 'Rose Face Mask',
                'category' => 'skincare',
                'slug' => 'rose-face-mask',
                'description' => 'Rose face mask for soft and refreshed skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/facemasks/facemask4.jpg',
                'stock' => 50,
            ],

            // 9
            [
                'name' => 'Refreshing Face Wash',
                'category' => 'skincare',
                'slug' => 'refreshing-face-wash',
                'description' => 'Refreshing face wash for clean and healthy skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/facewash/facewash1.jpg',
                'stock' => 50,
            ],

            // 10
            [
                'name' => '2% HA + Vitamin C Face Wash',
                'category' => 'skincare',
                'slug' => '2-ha-vitamin-c-face-wash',
                'description' => 'Hydrating face wash enriched with vitamin C.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/facewash/facewash2.jpg',
                'stock' => 50,
            ],

            // 11
            [
                'name' => 'Papaya Face Wash',
                'category' => 'skincare',
                'slug' => 'papaya-face-wash',
                'description' => 'Papaya face wash for fresh and clean skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/facewash/facewash3.jpg',
                'stock' => 50,
            ],

            // 12
            [
                'name' => 'Glutone Facewash',
                'category' => 'skincare',
                'slug' => 'glutone-facewash',
                'description' => 'Gentle facewash for daily skincare.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/facewash/facewash4.jpg',
                'stock' => 50,
            ],

            // 13
            [
                'name' => 'Moisturizer Cream',
                'category' => 'skincare',
                'slug' => 'moisturizer-cream',
                'description' => 'Moisturizing cream for soft and hydrated skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/moisturizer/moisturizer1.jpg',
                'stock' => 50,
            ],

            // 14
            [
                'name' => 'Face Gel Cream',
                'category' => 'skincare',
                'slug' => 'face-gel-cream',
                'description' => 'Lightweight gel cream for hydrated skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/moisturizer/moisturizer2.jpg',
                'stock' => 50,
            ],

            // 15
            [
                'name' => 'Derma Moisturizer Cream',
                'category' => 'skincare',
                'slug' => 'derma-moisturizer-cream',
                'description' => 'Daily moisturizer for soft and nourished skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/moisturizer/moisturzier3.jpg',
                'stock' => 50,
            ],

            // 16
            [
                'name' => 'Moisturizer Cream for Oily Skin',
                'category' => 'skincare',
                'slug' => 'moisturizer-cream-for-oily-skin',
                'description' => 'Lightweight moisturizer designed for oily skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/moisturizer/moisturizer4.jpg',
                'stock' => 50,
            ],

            // 17
            [
                'name' => 'Dot & Key Face Serum',
                'category' => 'skincare',
                'slug' => 'dot-key-face-serum',
                'description' => 'Face serum for glowing and healthy looking skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/serum/serum1.jpg',
                'stock' => 50,
            ],

            // 18
            [
                'name' => 'Vitamin C Face Serum',
                'category' => 'skincare',
                'slug' => 'vitamin-c-face-serum',
                'description' => 'Vitamin C serum for radiant looking skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/serum/serum2.webp',
                'stock' => 50,
            ],

            // 19
            [
                'name' => 'Hyphen Glow Serum',
                'category' => 'skincare',
                'slug' => 'hyphen-glow-serum',
                'description' => 'Glow serum for smooth and radiant skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/serum/serum3.webp',
                'stock' => 50,
            ],

            // 20
            [
                'name' => 'Vitamin C + E Face Serum',
                'category' => 'skincare',
                'slug' => 'vitamin-c-e-face-serum',
                'description' => 'Vitamin C and E serum for radiant skin.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/serum/serum4.jpg',
                'stock' => 50,
            ],

            // 21
            [
                'name' => 'Gel Sunscreen',
                'category' => 'skincare',
                'slug' => 'gel-sunscreen',
                'description' => 'Lightweight gel sunscreen for daily protection.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/sunscreen/sunscreen1.jpg',
                'stock' => 50,
            ],

            // 22
            [
                'name' => 'Sunscreen Face Cream',
                'category' => 'skincare',
                'slug' => 'sunscreen-face-cream',
                'description' => 'Daily sunscreen face cream.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/sunscreen/sunscreen2.jpg',
                'stock' => 50,
            ],

            // 23
            [
                'name' => 'Yuthika Sun Sheild Cream',
                'category' => 'skincare',
                'slug' => 'yuthika-sun-sheild-cream',
                'description' => 'Daily sun protection cream.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/sunscreen/sunscreen3.jpg',
                'stock' => 50,
            ],

            // 24
            [
                'name' => 'Dot & Key Mattifying Sunscreen',
                'category' => 'skincare',
                'slug' => 'dot-key-mattifying-sunscreen',
                'description' => 'Mattifying sunscreen for daily skincare.',
                'price' => 849,
                'discount_price' => 699,
                'image' => 'assests/images/products/skincare/sunscreen/sunscreen4.webp',
                'stock' => 50,
            ],

            //Accessories

            // ==================== ACCESSORIES ====================

[
    'name' => 'Makeup Brushes Set of 2',
    'category' => 'accessories',
    'slug' => 'makeup-brushes-set-of-2',
    'description' => 'Makeup Brushes Set of 2',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/makeup-brushes/brushes1.jpg',
    'stock' => 50,
],

[
    'name' => 'Makeup Brushes Set of 4',
    'category' => 'accessories',
    'slug' => 'makeup-brushes-set-of-4',
    'description' => 'Makeup Brushes Set of 4',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/makeup-brushes/brushes2.jpg',
    'stock' => 50,
],

[
    'name' => 'Makeup Brush Single',
    'category' => 'accessories',
    'slug' => 'makeup-brush-single',
    'description' => 'Makeup Brush Single',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/makeup-brushes/brushes3.jpg',
    'stock' => 50,
],

[
    'name' => 'Makeup Brushes Kit',
    'category' => 'accessories',
    'slug' => 'makeup-brushes-kit',
    'description' => 'Makeup Brushes Kit',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/makeup-brushes/brushes4.jpg',
    'stock' => 50,
],

[
    'name' => 'Makeup Organizer',
    'category' => 'accessories',
    'slug' => 'makeup-organizer-1',
    'description' => 'Makeup Organizer',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/makeup-organizer/organ1.jpg',
    'stock' => 50,
],

[
    'name' => 'Makeup Organizer',
    'category' => 'accessories',
    'slug' => 'makeup-organizer-2',
    'description' => 'Makeup Organizer',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/makeup-organizer/organ2.jpg',
    'stock' => 50,
],

[
    'name' => 'Makeup Organizer',
    'category' => 'accessories',
    'slug' => 'makeup-organizer-3',
    'description' => 'Makeup Organizer',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/makeup-organizer/organ3.jpg',
    'stock' => 50,
],

[
    'name' => 'Makeup Organizer',
    'category' => 'accessories',
    'slug' => 'makeup-organizer-4',
    'description' => 'Makeup Organizer',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/makeup-organizer/organ4.jpg',
    'stock' => 50,
],

[
    'name' => 'Makeup Blender Soft & Smooth',
    'category' => 'accessories',
    'slug' => 'makeup-blender-soft-smooth',
    'description' => 'Makeup Blender Soft & Smooth',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/beauty-blenders/blender1.jpg',
    'stock' => 50,
],

[
    'name' => 'Makeup Blender Set of 4',
    'category' => 'accessories',
    'slug' => 'makeup-blender-set-of-4',
    'description' => 'Makeup Blender Set of 4',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/beauty-blenders/blender2.jpg',
    'stock' => 50,
],

[
    'name' => 'Makeup Blender',
    'category' => 'accessories',
    'slug' => 'makeup-blender',
    'description' => 'Makeup Blender',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/beauty-blenders/blender3.jpg',
    'stock' => 50,
],

[
    'name' => 'Makeup Blender Set of 9',
    'category' => 'accessories',
    'slug' => 'makeup-blender-set-of-9',
    'description' => 'Makeup Blender Set of 9',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/beauty-blenders/blender4.jpg',
    'stock' => 50,
],

[
    'name' => 'Hair Accessory',
    'category' => 'accessories',
    'slug' => 'hair-accessory',
    'description' => 'Hair Accessory',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/hair-accessories/hair-access1.jpg',
    'stock' => 50,
],

[
    'name' => 'Butterfly Accesory for Hair',
    'category' => 'accessories',
    'slug' => 'butterfly-accesory-for-hair',
    'description' => 'Butterfly Accesory for Hair',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/hair-accessories/hair-access2.jpg',
    'stock' => 50,
],

[
    'name' => 'Stylish Hair Clips Set of 5',
    'category' => 'accessories',
    'slug' => 'stylish-hair-clips-set-of-5',
    'description' => 'Stylish Hair Clips Set of 5',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/hair-accessories/hair-access3.jpg',
    'stock' => 50,
],

[
    'name' => 'Stylish Hair Broach',
    'category' => 'accessories',
    'slug' => 'stylish-hair-broach',
    'description' => 'Beautiful stylish broach for hair.',
    'price' => 749,
    'discount_price' => 599,
    'image' => 'assests/images/products/accessories/hair-accessories/hair-access4.jpg',
    'stock' => 50,
],
// Fragrance

// ==================== FRAGRANCE ====================

[
    'name' => 'Plam Body Lovin ',
    'category' => 'fragrance',
    'slug' => 'Plam Body Lovin ',
    'description' => 'Plam Body Lovin ',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/fragrance/body-mists/body-mist1.webp',
    'stock' => 50,
],

[
    'name' => 'Dressberry Body Mist',
    'category' => 'fragrance',
    'slug' => 'body-mist-2',
    'description' => 'Body Mist',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/fragrance/body-mists/body-mist2.webp',
    'stock' => 50,
],

[
    'name' => ' Lavender Dreams Body Mist',
    'category' => 'fragrance',
    'slug' => 'body-mist-3',
    'description' => 'Body Mist',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/fragrance/body-mists/body-mist3.jpg',
    'stock' => 50,
],

[
    'name' => ' Sparkling lilac Body Mist',
    'category' => 'fragrance',
    'slug' => 'body-mist-4',
    'description' => 'Body Mist',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/fragrance/body-mists/body-mist4.webp',
    'stock' => 50,
],

[
    'name' => 'French Essenc3 Deodrant',
    'category' => 'fragrance',
    'slug' => 'deodrant-1',
    'description' => 'Body Mist',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/fragrance/deodrant/deodrant1.jpg',
    'stock' => 50,
],

[
    'name' => 'Signature Deodrant',
    'category' => 'fragrance',
    'slug' => 'deodrant-2',
    'description' => 'Body Mist',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/fragrance/deodrant/deodrant2.jpg',
    'stock' => 50,
],

[
    'name' => 'Enigma Deodrant Spray',
    'category' => 'fragrance',
    'slug' => 'deodrant-3',
    'description' => 'Body Mist',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/fragrance/deodrant/deodrant3.jpg',
    'stock' => 50,
],

[
    'name' => 'Cantabil Deodrant',
    'category' => 'fragrance',
    'slug' => 'deodrant-4',
    'description' => 'Body Mist',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/fragrance/deodrant/deodrant4.jpg',
    'stock' => 50,
],

[
    'name' => 'Cud Rush Perfume',
    'category' => 'fragrance',
    'slug' => 'perfume-1',
    'description' => 'Body Mist',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/fragrance/perfumes/perfume1.webp',
    'stock' => 50,
],

[
    'name' => 'Extrait de Perfume',
    'category' => 'fragrance',
    'slug' => 'perfume-2',
    'description' => 'Body Mist',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/fragrance/perfumes/perfume2.webp',
    'stock' => 50,
],

[
    'name' => 'Symphony Perfume',
    'category' => 'fragrance',
    'slug' => 'perfume-3',
    'description' => 'Body Mist',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/fragrance/perfumes/perfume3.avif',
    'stock' => 50,
],

[
    'name' => 'Unique Luxury Perfume',
    'category' => 'fragrance',
    'slug' => 'perfume-4',
    'description' => 'Body Mist',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/fragrance/perfumes/perfume4.avif',
    'stock' => 50,
],

// Haircare

// ==================== HAIRCARE ====================


[
    'name' => 'SHREE HERBAL - ONION ENRICHED Hair Care Oil',
    'category' => 'haircare',
    'slug' => 'SHREE HERBAL - ONION ENRICHED Hair Care Oil',
    'description' => 'SHREE HERBAL - ONION ENRICHED Hair Care Oil',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/hair-oils/hair-oil3.webp',
    'stock' => 50,
],

[
    'name' => 'ENSHINE Hair Oil & Serum',
    'category' => 'haircare',
    'slug' => 'ENSHINE Hair Oil & Serum',
    'description' => 'ENSHINE Hair Oil & Serum',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/hair-oils/hair-oil4.jpg',
    'stock' => 50,
],

[
    'name' => 'MCD Conditioner',
    'category' => 'haircare',
    'slug' => 'MCD Conditioner',
    'description' => 'MCD Conditioner',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/conditioner/hair-conditioner1.jpg',
    'stock' => 50,
],

[
    'name' => 'Hair Care Conditioner',
    'category' => 'haircare',
    'slug' => 'Hair Care Conditioner',
    'description' => 'Hair Care Conditioner',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/conditioner/hair-conditioner2.jpg',
    'stock' => 50,
],

[
    'name' => 'Hydrating leave-in conditioner',
    'category' => 'haircare',
    'slug' => 'Hydrating leave-in conditioner',
    'description' => 'Hydrating leave-in conditioner',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/conditioner/hair-conditioner3.jpg',
    'stock' => 50,
],

[
    'name' => 'PLANT PROTEIN - HAIR CONDITIONER & SHAMPOO',
    'category' => 'haircare',
    'slug' => 'PLANT PROTEIN - HAIR CONDITIONER & SHAMPOO',
    'description' => 'PLANT PROTEIN - HAIR CONDITIONER & SHAMPOO',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/conditioner/hair-conditioner4.webp',
    'stock' => 50,
],

[
    'name' => 'MISS CARE Keratin Nutrition Treatment - HAIR MASK',
    'category' => 'haircare',
    'slug' => 'MISS CARE Keratin Nutrition Treatment - HAIR MASK',
    'description' => 'MISS CARE Keratin Nutrition Treatment - HAIR MASK',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/hair-masks/hair-mask1.jpg',
    'stock' => 50,
],

[
    'name' => 'Argan Oil Hair Mask',
    'category' => 'haircare',
    'slug' => 'Argan Oil Hair Mask',
    'description' => 'Argan Oil Hair Mask',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/hair-masks/hair-mask2.jpg',
    'stock' => 50,
],

[
    'name' => 'Keratin Smooth Hair Mask',
    'category' => 'haircare',
    'slug' => 'Keratin Smooth Hair Mask',
    'description' => 'Keratin Smooth Hair Mask',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/hair-masks/hair-mask3.jpg',
    'stock' => 50,
],

[
    'name' => 'Palm Hair Mask',
    'category' => 'haircare',
    'slug' => 'Palm Hair Mask',
    'description' => 'Palm Hair Mask',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/hair-masks/hair-mask4.jpg',
    'stock' => 50,
],

[
    'name' => ' Hair Serum',
    'category' => 'haircare',
    'slug' => 'Hair Serum',
    'description' => 'Hair Serum',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/hair-serum/hair-serum1.jpg',
    'stock' => 50,
],

[
    'name' => 'MORSHINE Hair Serum',
    'category' => 'haircare',
    'slug' => 'MORSHINE Hair Serum',
    'description' => 'MORSHINE Hair Serum',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/hair-serum/hair-serum2.jpg',
    'stock' => 50,
],

[
    'name' => 'Hair serum Argan Oil',
    'category' => 'haircare',
    'slug' => 'Hair serum Argan Oil',
    'description' => 'Hair serum Argan Oil',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/hair-serum/hair-serum3.jpg',
    'stock' => 50,
],

[
    'name' => 'EVOESSENCE Hair oil & Hair Serum',
    'category' => 'haircare',
    'slug' => 'EVOESSENCE Hair oil & Hair Serum',
    'description' => 'EVOESSENCE Hair oil & Hair Serum',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/hair-serum/hair-serum4.jpg',
    'stock' => 50,
],

[
    'name' => 'WE HERBAL Shampoo + Conditioner',
    'category' => 'haircare',
    'slug' => 'WE HERBAL Shampoo + Conditioner',
    'description' => 'WE HERBAL Shampoo + Conditioner',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/shampoo/shampoo1.webp',
    'stock' => 50,
],

[
    'name' => 'Hairfall Control Shampoo',
    'category' => 'haircare',
    'slug' => 'Hairfall Control Shampoo',
    'description' => 'Hairfall Control Shampoo',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/shampoo/shampoo2.webp',
    'stock' => 50,
],

[
    'name' => 'Dunacare shampoo & Conditioner',
    'category' => 'haircare',
    'slug' => 'Dunacare shampoo & Conditioner',
    'description' => 'Dunacare shampoo & Conditioner',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/shampoo/shampoo3.webp',
    'stock' => 50,
],

[
    'name' => 'Color Lasting Shampoo',
    'category' => 'haircare',
    'slug' => 'Color Lasting Shampoo',
    'description' => 'Color Lasting Shampoo',
    'price' => 999,
    'discount_price' => 799,
    'image' => 'assests/images/products/haircare/shampoo/shampoo4.webp',
    'stock' => 50,
],

// Makeup


// ==================== MAKEUP ====================

[
    'name' => 'Matte Blush Palette',
    'category' => 'makeup',
    'slug' => 'matte-blush-palette',
    'description' => 'Matte Blush Palette',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/blush/blush1.jpg',
    'stock' => 50,
],

[
    'name' => 'Lakme Blush Palette',
    'category' => 'makeup',
    'slug' => 'lakme-blush-palette',
    'description' => 'Lakme Blush Palette',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/blush/blush2.jpg',
    'stock' => 50,
],

[
    'name' => 'Pinkish Blush',
    'category' => 'makeup',
    'slug' => 'pinkish-blush',
    'description' => 'Pinkish Blush',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/blush/blush3.jpg',
    'stock' => 50,
],

[
    'name' => 'Matte Blush SkinTone Color',
    'category' => 'makeup',
    'slug' => 'matte-blush-skintone-color',
    'description' => 'Matte Blush SkinTone Color',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/blush/blush4.jpg',
    'stock' => 50,
],

[
    'name' => 'HD PRO. Concealer',
    'category' => 'makeup',
    'slug' => 'hd-pro-concealer',
    'description' => 'HD PRO. Concealer',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/concealer/concealer1.jpg',
    'stock' => 50,
],

[
    'name' => 'Concealer',
    'category' => 'makeup',
    'slug' => 'concealer',
    'description' => 'Concealer',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/concealer/concealer2.jpg',
    'stock' => 50,
],

[
    'name' => 'Forever Concealer',
    'category' => 'makeup',
    'slug' => 'forever-concealer',
    'description' => 'Forever Concealer',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/concealer/concealer3.jpg',
    'stock' => 50,
],

[
    'name' => 'Professional Concealer',
    'category' => 'makeup',
    'slug' => 'professional-concealer',
    'description' => 'Professional Concealer',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/concealer/concealer4.jpg',
    'stock' => 50,
],

[
    'name' => 'Dazller Eyeliner',
    'category' => 'makeup',
    'slug' => 'Dazller Eyeliner',
    'description' => 'Dazller Eyeliner',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/eyeliner/eyeliner1.jpg',
    'stock' => 50,
],

[
    'name' => 'Midnight Matte Eyeliner',
    'category' => 'makeup',
    'slug' => 'Midnight Matte Eyeliner',
    'description' => 'Midnight Matte Eyeliner',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/eyeliner/eyeliner2.jpg',
    'stock' => 50,
],

[
    'name' => 'LOVECHILD Precision Liquid Eye Liner',
    'category' => 'makeup',
    'slug' => 'LOVECHILD  Precision Liquid Eye Liner',
    'description' => 'LOVECHILD Precision Liquid Eye Liner',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/eyeliner/eyeliner3.jpg',
    'stock' => 50,
],

[
    'name' => 'Insight Cosmetics No Smudge Eyeliner Black',
    'category' => 'makeup',
    'slug' => 'Insight Cosmetics No Smudge Eyeliner Black',
    'description' => 'Insight Cosmetics No Smudge Eyeliner Black',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/eyeliner/eyeliner4.jpg',
    'stock' => 50,
],

[
    'name' => 'Gege Bear Light Phantom 9 Colors Eyeshadow',
    'category' => 'makeup',
    'slug' => 'Gege Bear Light Phantom 9 Colors Eyeshadow',
    'description' => 'Gege Bear Light Phantom 9 Colors Eyeshadow',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/eyeshadow/eyeshadow1.jpg',
    'stock' => 50,
],

[
    'name' => 'Insight All Eyes On You Eyeshadow Palette',
    'category' => 'makeup',
    'slug' => 'Insight All Eyes On You Eyeshadow Palette',
    'description' => 'Insight All Eyes On You Eyeshadow Palette',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/eyeshadow/eyeshadow2.jpg',
    'stock' => 50,
],

[
    'name' => 'Small four-shades of EyeShadow Palette',
    'category' => 'makeup',
    'slug' => 'Small four-shades of EyeShadow Palette',
    'description' => 'Small four-shades of EyeShadow Palette',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/eyeshadow/eyeshadow3.jpg',
    'stock' => 50,
],

[
    'name' => 'Giltery Eye-Shadow Palette',
    'category' => 'makeup',
    'slug' => 'Giltery Eye-Shadow Palette',
    'description' => 'Giltery Eye-Shadow Palette',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/eyeshadow/eyeshadow4.jpg',
    'stock' => 50,
],

[
    'name' => 'BRAND Foundation SPF-30',
    'category' => 'makeup',
    'slug' => 'BRAND Foundation SPF-30',
    'description' => 'BRAND Foundation SPF-30',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/foundation/foundation1.jpg',
    'stock' => 50,
],

[
    'name' => 'LAKME Foundation',
    'category' => 'makeup',
    'slug' => 'LAKME Foundation',
    'description' => 'LAKME Foundation',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/foundation/foundation2.jpg',
    'stock' => 50,
],

[
    'name' => 'HD Liquid Foundation',
    'category' => 'makeup',
    'slug' => 'HD Liquid Foundation',
    'description' => 'HD Liquid Foundation',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/foundation/foundation3.jpg',
    'stock' => 50,
],

[
    'name' => 'ME-ON ultra HD foundation',
    'category' => 'makeup',
    'slug' => 'ME-ON ultra HD foundation',
    'description' => 'ME-ON ultra HD foundation',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/foundation/foundation4.jpg',
    'stock' => 50,
],

[
    'name' => 'Lipgloss',
    'category' => 'makeup',
    'slug' => 'Lipgloss',
    'description' => 'Lipgloss',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/lipgloss/lipgloss1.jpg',
    'stock' => 50,
],

[
    'name' => 'Matte Lipgloss',
    'category' => 'makeup',
    'slug' => 'Matte Lipgloss',
    'description' => 'Matte Lipgloss',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/lipgloss/lipgloss2.jpg',
    'stock' => 50,
],

[
    'name' => 'shiny Lipgloss',
    'category' => 'makeup',
    'slug' => 'shiny Lipgloss',
    'description' => 'shiny Lipgloss',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/lipgloss/lipgloss3.jpg',
    'stock' => 50,
],

[
    'name' => 'Pack of 4 Shades Lipgloss',
    'category' => 'makeup',
    'slug' => 'Pack of 4 Shades Lipgloss',
    'description' => 'Pack of 4 Shades Lipgloss',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/lipgloss/lipgloss4.jpg',
    'stock' => 50,
],

[
    'name' => 'Dark Red Matte Lipstick',
    'category' => 'makeup',
    'slug' => 'Dark Red Matte Lipstick',
    'description' => 'Dark Red Matte Lipstick',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/lipsticks/lipstick1.jpg',
    'stock' => 50,
],

[
    'name' => '3 shades combo',
    'category' => 'makeup',
    'slug' => '3 shades combo',
    'description' => '3 shades combo',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/lipsticks/lipstick2.jpg',
    'stock' => 50,
],

[
    'name' => 'Matte Nude Lipstick',
    'category' => 'makeup',
    'slug' => 'Matte Nude Lipstick',
    'description' => 'Matte Nude Lipstick',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/lipsticks/lipstick3.jpg',
    'stock' => 50,
],

[
    'name' => 'Matte Red Lipstick',
    'category' => 'makeup',
    'slug' => 'Matte Red Lipstick',
    'description' => 'Matte Red Lipstick',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/lipsticks/lipstick4.jpg',
    'stock' => 50,
],

[
    'name' => 'Curling Mascara',
    'category' => 'makeup',
    'slug' => 'Curling Mascara',
    'description' => 'Curling Mascara',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/mascara/mascara1.jpg',
    'stock' => 50,
],

[
    'name' => 'Waterproof Mascara',
    'category' => 'makeup',
    'slug' => 'Waterproof Mascara',
    'description' => 'Waterproof Mascara',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/mascara/mascara2.jpg',
    'stock' => 50,
],

[
    'name' => 'Loreal Mascara',
    'category' => 'makeup',
    'slug' => 'Loreal Mascara',
    'description' => 'Loreal Mascara',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/mascara/mascara3.jpg',
    'stock' => 50,
],

[
    'name' => 'Mascara',
    'category' => 'makeup',
    'slug' => 'Mascara',
    'description' => 'Mascara',
    'price' => 699,
    'discount_price' => 499,
    'image' => 'assests/images/products/makeup/mascara/mascara4.jpg',
    'stock' => 50,
],
        ];

        foreach ($products as $product) {
    Product::updateOrCreate(
        ['image' => $product['image']],
        array_merge($product, [
            'is_active' => true,
        ])
    );
}
}
}