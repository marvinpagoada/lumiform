@extends('layout/base')

@section("head.title", __("Easy Documentation Software & App - FREE - Lumiform"))
@section('meta-tags')
    <meta name="keywords" content="@lang('Documentation software')">
    <meta name="keywords" content="@lang('documentation app')">
    <meta name="keywords" content="@lang('documentation system')">
    <meta name="description"
          content="@lang('Cut documentation time by half with the documentation app and store all documents safely in the documentation software. FOR FREE.')">
@endsection

@section("content")
    <section class="lg:py-26 py-16 cases--documentation">
        <div class="container mx-auto">
            <div class="w-full lg:w-10/12 mx-auto mb-12 lg:mb-24">
                <h1 class="text-70 font-cocogoose font-black uppercase text-center tracking-normal text-primary mb-10 lg:mb-16 leading-tight">
                    @lang('Remain compliant
                        <span class="line__break"></span> with the documentation app')
                </h1>
                <p class="text-30 font-light font-din text-secondary text-center">
                    @lang('Legally compliant documentation has never been easier and faster than with Lumiform.')
                </p>
            </div>
            <button class="mx-auto w-215  bg-red tracking-large font-extrabold text-white uppercase font-cocogoose text-20 h-70  rounded-20 items-center justify-center flex">
                @lang('try for FREE')
            </button>
        </div>
    </section>
    <section class="py-16 lg:py-32 with__border--bottom">
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('<span class="text-light-blue">Cut documentation time </span> by 20%'),
        'image' => ['group-4912.png','group-4912@2x.png'],
        'items' => [
        __('Automate the documentation of issues and corrective actions, while conducting checks more quickly.'),
        __('Digital documentation keeps data consistent across the entire company, saving time and money.')
        ],
        'bottom' => ['text' => __('Pizza Hut cut the time required for HACCP documentation by 20%.'),'borderColor' => 'light-blue']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('<span class="text-red">Increased security and compliance</span>'),
        'image' => ['group-4771.png','group-4771@2x.png'],
        'reversed' => true,
        'items' => [
        __('We document checklist results and troubleshooting procedures reliably and automatically. '),
        __('Secure data without any danger of physical damage in the cloud.')
        ],
        'bottom' => ['text' => __('At MyGoodness, hygiene controls take 50% less time for the HACCP control, per store than before.'),'borderColor' => 'red']
        ])
        @include('components.use-cases.image_text_horizontal',[
        'heading' => __('<span class="text-green">More transparency </span>'),
        'image' => ['group-4900.png','group-4900@2x.png'],
        'items' => [
        __('Digital documentation allows a constant overview of results, and full control over all documentation tasks.'),
        __('Digital documentations can be evaluated quickly with real-time results.'),
        ],
        'bottom' => ['text' => __('With Lumiform, Pizza Hut has increased its problem-solving rate three-fold. '),'borderColor' => 'green']
        ])
        <a href=""
           class="mx-auto base__button font-extrabold bg-red text-white uppercase font-cocogoose text-20 h-70 px-8 rounded-20 items-center flex">@lang('Get Lumiform FREE')</a>
    </section>
    <section class="py-16 lg:py-28 with__border--bottom">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 lg:mb-2 uppercase tracking-heading">
                @lang('Provide <span class="text-light-blue"> compliant documentation </span>automatically')
            </h2>
            <p class="text-center font-light font-din text-30 text-secondary tracking-text mb-10 lg:mb-26">
                @lang('Digitise documentation in all areas of your business, conduct checks via <span class="line__break"></span> the app and get fully automated, fully compliant reports.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-4888.png','group-4888@2x.png'],'title' => __('Create documents'),'desc' => __('Create custom forms for digital documentation in minutes. A variety of standardised templates help you to find the standard that’s right for you.')],
            ['srcset' => ['group-4434.png','group-4434@2x.png'],'title' => __('Conduct via App'),'desc' => __('Execute standardised documentation quickly and easily via the app - whether with a tablet or smartphone, Android, or iOS, online or offline. ')],
            ['srcset' => ['group-4852.png','group-4852@2x.png'],'title' => __('Solve Issues'),'desc' => __('Assign issues on the fly, to the right person, so that you can resolve incidents efficiently together, as a team. The troubleshooting is automatically documented.')],
            ['srcset' => ['group-4853.png','group-4853@2x.png'],'title' => __('Results, Reports and Analyses'),'desc' => __('All documents are digitally archived, and they can be retrieved at any time, from anywhere. Filter functions allow a quick search for the right document.')],
            ],
            'features' => ['url' => '#','text' => __('Explore more PRODUCT features')]
            ])

        </div>
    </section>
    @include('components.solution.industries_explore_section',[
    'heading' => __('See how we help teams to <span class="line__break"></span>
        <span class="text-green">have the right document </span>always on hand '),
    'items' => [
    ['image' => 'documentation-restaurant-cleaning-large.png','srcset' => ['documentation-restaurant-cleaning-large.png','documentation-restaurant-cleaning-large@2x.png'],'template' => ['url' => '#','text' => __('View restaurant documentation CASE STUDY')] ],
    ['image' => 'documentation-temperature.png','srcset' => ['documentation-temperature.png','documentation-temperature@2x.png'],'template' => ['url' => '#','text' => __('View HACCP documentation CASE STUDY')] ],
    ]
    ])
    @include('components.solution.industries_quotes',[
    'image' => 'quote-orange.png',
    'class' => 'bg-orange-extralight',
    'text' => __('“Lumiform has helped us to eliminate accidents on the construction site, and we have managed to increase the quality of work at the same time, through frequent safety and quality controls.“'),
    'position' => __('- Christina, Head of Quality, Environmental and Safety Management'),
    ])
    @include('components.use-cases.section_companies')
    @include('components.product.bottom_form',[
    'heading' => __('Fully automated documentation with Lumiform – free of charge!'),
   'sectionBg' =>'gold',
    'buttonBg' =>'orange',
    'left' => true,
    'image' =>'group-2213.svg',
    ])
@endsection
