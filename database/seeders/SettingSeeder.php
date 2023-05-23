<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'key' => 'Jadwal',
            'coltypes' => [
                'Hari' => 'string',
                'Waktu' => 'string',
                'Libur' => 'boolean',
            ],
            'props' => [
                [
                    "Hari" => "Senin",
                    "Waktu" => "",
                    "Libur" => true,
                ],
                [
                    "Hari" => "Selasa",
                    "Waktu" => "15:00 s/d 03:00",
                    "Libur" => false,
                ],
                [
                    "Hari" => "Rabu",
                    "Waktu" => "15:00 s/d 03:00",
                    "Libur" => false,
                ],
                [
                    "Hari" => "Kamis",
                    "Waktu" => "15:00 s/d 03:00",
                    "Libur" => false,
                ],
                [
                    "Hari" => "Jumat",
                    "Waktu" => "15:00 s/d 03:00",
                    "Libur" => false,
                ],
                [
                    "Hari" => "Sabtu",
                    "Waktu" => "15:00 s/d 03:00",
                    "Libur" => false,
                ],
                [
                    "Hari" => "Minggu",
                    "Waktu" => "15:00 s/d 03:00",
                    "Libur" => false,
                ],
            ]
        ]);

        Setting::create([
            'key' => 'Kontak',
            'coltypes' => [
                'Tipe' => [
                    'kontak',
                    'email',
                    'alamat',
                ],
                'Value' => 'string',
                'Nama' => 'string',
            ],
            'props' => [
                [
                    'Tipe' => 'kontak',
                    'Value' => '081234567890',
                    'Nama' => 'John Doe'
                ],
                [
                    'Tipe' => 'email',
                    'Value' => 'yourlovelydev@gmail.com',
                    'Nama' => 'John Doe'
                ],
                [
                    'Tipe' => 'alamat',
                    'Value' => 'Jl. Testing No. 123, Jakarta Selatan',
                    'Nama' => 'Kopikuy'
                ],
            ]
        ]);

        Setting::create([
            'key' => 'Front Page',
            'coltypes' => [
                'Nama' => 'string',
                'Value' => 'string',
            ],
            'props' => [
                // Hero
                [
                    'Nama' => 'HeroTitle',
                    'Value' => 'TIME TO DISCOVER THE BEST COFFEESHOP IN CIREBON',
                ],
                [
                    'Nama' => 'HeroDescription',
                    'Value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam corporis perspiciatis quia. Nisi fuga facere officia voluptates voluptas quasi enim quam provident, totam nihil similique culpa harum necessitatibus asperiores laudantium?',
                ],
                [
                    'Nama' => 'HeroPrimaryButton',
                    'Value' => 'Discover',
                ],
                [
                    'Nama' => 'HeroPrimaryAction',
                    'Value' => 'javascript:void(0)',
                ],
                [
                    'Nama' => 'HeroSecondaryButton',
                    'Value' => 'Discover',
                ],
                [
                    'Nama' => 'HeroSecondaryAction',
                    'Value' => 'javascript:void(0)',
                ],
                // About Us
                [
                    'Nama' => 'AboutUsTitle',
                    'Value' => 'LOREM, IPSUM DOLOR SIT AMET.',
                ],
                [
                    'Nama' => 'AboutUsDescription',
                    'Value' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta voluptatibus praesentium inventore quaerat officiis veniam maxime.',
                ],
                [
                    'Nama' => 'AboutUsFeat1Title',
                    'Value' => 'LOREM, IPSUM DOLOR SIT AMET.',
                ],
                [
                    'Nama' => 'AboutUsFeat1Description',
                    'Value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque nobis blanditiis quibusdam, quas distinctio recusandae maxime nostrum eius aut minus nulla sed ipsum doloribus eos beatae necessitatibus!',
                ],
                [
                    'Nama' => 'AboutUsFeat2Title',
                    'Value' => 'LOREM, IPSUM DOLOR SIT AMET.',
                ],
                [
                    'Nama' => 'AboutUsFeat2Description',
                    'Value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque nobis blanditiis quibusdam, quas distinctio recusandae maxime nostrum eius aut minus nulla sed ipsum doloribus eos beatae necessitatibus!',
                ],
                [
                    'Nama' => 'AboutUsPrimaryButtonDescription',
                    'Value' => 'LEARN MORE',
                ],
                [
                    'Nama' => 'AboutUsPrimaryButtonAction',
                    'Value' => 'javascript:void(0)',
                ],
                // Secretary Data
                [
                    'Nama' => 'SecretaryImage',
                    'Value' => 'url',
                ],
                [
                    'Nama' => 'SecretaryName',
                    'Value' => 'Aghits Nidallah',
                ],
                [
                    'Nama' => 'SecretaryDescription',
                    'Value' => 'Secretary & CEO',
                ],
                // Client Testimonial
                [
                    'Nama' => 'TestimonialVideo',
                    'Value' => 'url',
                ],
                [
                    'Nama' => 'TestimonialTitle',
                    'Value' => 'DIVINE AROMA IN EVERY SINGLE CUP',
                ],
                [
                    'Nama' => 'TestimonialDescription',
                    'Value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic velit maiores necessitatibus. Magnam laboriosam minus, eligendi et perferendis, aperiam error, quia pariatur vitae alias similique dignissimos odit tempora repudiandae eum. <br/>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus eveniet suscipit, vero facilis earum odit esse nesciunt illum. Accusantium nobis laudantium iste laborum similique vero quis eligendi consequuntur assumenda debitis?',
                ],
            ]
        ]);

        Setting::create([
            'key' => 'Reservation Contact',
            'coltypes' => [
                'Tipe' => [
                    'kontak',
                    'email',
                    'alamat',
                ],
                'Value' => 'string',
                'Nama' => 'string',
            ],
            'props' => [
                [
                    'Tipe' => 'kontak',
                    'Value' => '62-851-5533-2844',
                    'Nama' => 'Aghits'
                ],
                [
                    'Tipe' => 'kontak',
                    'Value' => '62-851-5533-2844',
                    'Nama' => 'Dian'
                ],
                [
                    'Tipe' => 'email',
                    'Value' => 'yourlovelydev@gmail.com',
                    'Nama' => 'Aghits'
                ],
                [
                    'Tipe' => 'email',
                    'Value' => 'yourlovelydev@gmail.com',
                    'Nama' => 'Dian'
                ],
                [
                    'Tipe' => 'alamat',
                    'Value' => 'Jl. Testing No. 123, Jakarta Selatan',
                    'Nama' => 'Kopikuy'
                ],
            ]
        ]);

        Setting::create([
            'key' => 'About Us Short Description',
            'coltypes' => [
                'Nama' => 'string',
                'Value' => 'string',
            ],
            'props' => [
                [
                    'Nama' => 'AboutUsShortDescription',
                    'Value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam minus accusantium porro sint beatae quam.',
                ],
            ]
        ]);

        Setting::create([
            'key' => 'Offers',
            'coltypes' => [],
            'props' => []
        ]);
    }
}
