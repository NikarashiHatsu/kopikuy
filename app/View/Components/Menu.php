<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $items = [],
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->items = [
            [
                'category' => 'Chocolate',
                'menus' => [
                    [
                        'name' => 'Hot Chocolate',
                        'description' => 'A classic chocolate beverage made by mixing cocoa powder or chocolate with hot milk. It\'s rich, creamy, and often topped with whipped cream or marshmallows.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/chocolate/jonny-caspari-sWvPvEVygkU-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Chocolate milkshake',
                        'description' => 'A refreshing and indulgent drink made by blending chocolate ice cream, milk, and sometimes chocolate syrup or chocolate powder. It has a thick and creamy consistency and is often garnished with whipped cream and chocolate shavings.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/chocolate/sandie-clarke-pYAbhWb_LaQ-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Chocolate mocha',
                        'description' => 'A delightful combination of coffee and chocolate, the chocolate mocha is made by adding chocolate syrup or melted chocolate to a shot of espresso, and then mixed with steamed milk. It\'s a perfect choice for coffee and chocolate lovers.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/chocolate/pariwat-pannium-RA8xmR95LAM-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Hot frappuccino',
                        'description' => 'A chilled and blended beverage that combines chocolate, milk, ice, and sometimes coffee or espresso. It has a smooth and icy texture, and it\'s often topped with whipped cream and drizzled with chocolate sauce.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/chocolate/pariwat-pannium-plT_6jWIRos-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Hot martini',
                        'description' => 'A sophisticated cocktail that features a mix of chocolate liqueur, vodka, and sometimes cream. It is typically shaken with ice and strained into a martini glass. This indulgent drink is garnished with chocolate shavings or a chocolate-dipped rim for added decadence.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/chocolate/victor-rutka-4FujjkcI40g-unsplash.jpg'),
                    ],
                ],
            ],
            [
                'category' => 'Coffee',
                'menus' => [
                    [
                        'name' => 'Espresso',
                        'description' => 'A concentrated shot of coffee made by forcing pressurized hot water through finely ground coffee beans. It has a strong flavor and is the foundation for many coffee beverages.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/coffee/irene-kredenets-maO-qIKLqi8-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Cappuccino',
                        'description' => 'A traditional Italian coffee drink consisting of equal parts espresso, steamed milk, and milk foam. It\'s typically served in a small cup and often topped with a sprinkle of cocoa powder or cinnamon.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/coffee/dan-smedley-765Ogj6zVuI-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Latte',
                        'description' => 'A creamy coffee beverage made with espresso and steamed milk. It has a higher milk-to-espresso ratio compared to a cappuccino, resulting in a smoother and milder flavor. Latte art, such as intricate patterns or designs created with milk foam, is often added on top.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/coffee/fahmi-fakhrudin-nzyzAUsbV0M-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Americano',
                        'description' => 'A simple yet popular coffee drink made by diluting a shot of espresso with hot water. It resembles drip coffee but with a stronger flavor, as it retains the intensity of the espresso.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/coffee/mayur-vP9TjdIm9fE-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Mocha',
                        'description' => 'A delightful combination of chocolate and coffee, the mocha is made by adding chocolate syrup or melted chocolate to a shot of espresso, then mixed with steamed milk. It\'s a sweet and indulgent beverage often topped with whipped cream and a drizzle of chocolate syrup.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/coffee/shayna-douglas-e-8xxuZfSMw-unsplash.jpg'),
                    ],
                ],
            ],
            [
                'category' => 'Tea',
                'menus' => [
                    [
                        'name' => 'Green tea',
                        'description' => 'A type of tea made from the leaves of the Camellia sinensis plant that haven\'t undergone oxidation. It has a light and refreshing flavor with subtle vegetal notes. Green tea is known for its potential health benefits and is often enjoyed hot or cold.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/tea/laark-boshoff-9T5FvfnmH_k-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Earl Grey tea',
                        'description' => 'A black tea blend flavored with the essence of bergamot, a citrus fruit. It has a distinctive floral and citrus aroma, making it a popular choice for tea enthusiasts. Earl Grey tea can be enjoyed with or without milk, depending on personal preference.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/tea/matt-seymour-PVSCfkqcMP4-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Chamomile tea',
                        'description' => 'An herbal tea made from the dried flowers of the chamomile plant. It has a soothing and calming effect and is often consumed before bedtime to promote relaxation and better sleep. Chamomile tea has a mild, floral flavor and is caffeine-free.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/tea/tea-creative-soo-chung-XdpuSIwodDk-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Chai tea',
                        'description' => 'A spiced tea originating from India, chai is made by brewing black tea with a combination of aromatic spices like cinnamon, cardamom, ginger, cloves, and black pepper. It has a warm and invigorating flavor profile and is commonly served with milk and sweetened with honey or sugar.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/tea/shubham-dangi-ynnYEs3NyaY-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Rooibo tea',
                        'description' => 'Also known as red tea, rooibos tea is an herbal tea made from the leaves of the Aspalathus linearis plant, native to South Africa. It has a naturally sweet and nutty taste, often described as earthy and full-bodied. Rooibos tea is caffeine-free and can be enjoyed hot or cold.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/tea/carli-jeen-15YDf39RIVc-unsplash (1).jpg'),
                    ],
                ],
            ],
            [
                'category' => 'Dessert',
                'menus' => [
                    [
                        'name' => 'Tiramisu',
                        'description' => 'A classic Italian dessert consisting of layers of ladyfingers soaked in coffee and rum, with a creamy filling made of mascarpone cheese and eggs. It is often dusted with cocoa powder on top and pairs wonderfully with a cup of coffee.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/dessert/jay-gajjar-lGIXXpeERSM-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Chocolate brownies',
                        'description' => 'Rich, fudgy, and chocolatey brownies are a delightful treat to enjoy alongside a cup of coffee. The combination of the bittersweet chocolate flavors in the brownies with the bitterness of coffee creates a harmonious balance.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/dessert/alena-ganzhela-MONzTP2XxUE-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Cannoli',
                        'description' => 'A traditional Italian pastry consisting of a crispy, tube-shaped shell filled with a sweet and creamy ricotta cheese filling. Enjoying a cannoli with a cup of coffee is a delightful way to complement the richness and sweetness of the pastry.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/dessert/sangria-senorial-V7-dIKURxK4-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Biscotti',
                        'description' => 'These crunchy, twice-baked Italian cookies are perfect for dipping into a cup of coffee. Biscotti often have flavors like almond or chocolate and are designed to be dunked into the coffee, softening slightly while still maintaining their texture.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/dessert/mae-mu-kID9sxbJ3BQ-unsplash.jpg'),
                    ],
                    [
                        'name' => 'Crème brûlée',
                        'description' => 'A classic French dessert featuring a rich and smooth custard base topped with a layer of caramelized sugar. The creamy and velvety texture of crème brûlée pairs wonderfully with the bold flavors of coffee, making it a delightful dessert choice to enjoy alongside a cup of your favorite brew.',
                        'price' => random_int(10000, 50000),
                        'image' => asset('img/dessert/j-luis-esquivel-PerJ_q-EuKw-unsplash.jpg'),
                    ],
                ],
            ],
        ];

        return view('components.menu', [
            'randomMenus' => collect($this->items)
                ->flatMap(fn ($items) => $items['menus'])
                ->shuffle()
                ->slice(0, 5)
                ->all(),
        ]);
    }
}
