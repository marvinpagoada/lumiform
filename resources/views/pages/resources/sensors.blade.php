@extends('layout/base')

@section("head.title", __("Lumiform - Affordable Temperature Monitoring for Food & Hospitality"))
@section('meta-tags')
        <meta name="keywords" content="@lang('Temperature sensors')">
        <meta name="keywords" content="@lang('temperature monitoring')">
        <meta name="keywords" content="@lang('Temperature tracking')">
    <meta name="description" content="@lang('Try out the most affordable and easy temperature monitoring solution and food safety app with real-time tracking via sensors.')">
@endsection
@section("content")
    <section class="py-8 md:py-16 xl:py-35 bg-pink">
        <div class="container mx-auto">
            <h1 class="text-70 font-cocogoose font-black uppercase text-center tracking-normal text-primary mb-12 leading-tight">
                @lang('Automated and affordable temperature and humidity monitoring')
            </h1>
            <div class="flex justify-center">
                <a href="#"
                   class="font-extrabold text-20 bg-red text-white uppercase font-cocogoose  px-12 py-6 rounded-20 tracking-large text-center">
                    @lang('Buy hardware now & test software for free')
                </a>
            </div>
        </div>
    </section>
    <section id="control" class="py-8 md:py-16 xl:py-26">
        <div class="container mx-auto">
            <h2 class="text-50 font-black font-cocogoose text-primary text-center lg:mb-26 mb-10 uppercase">@lang('Stay in control without manual effort')</h2>

            <div class="control__items md:flex justify-between">
                <div class="control__item lg:flex md:mb-0 mb-5">
                    <div class="control__icon lg:mr-8 text mx-auto mb-5">
                        <img src="{{asset('img/icons/face-happy_green.svg')}}" alt="">
                    </div>
                    <div class="control__left lg:text-left text-center">
                        <h5 class="text-green text-20 font-cocogoose font-black tracking-heading leading-snug mb-3 md:mb-8 uppercase">@lang('No documentation effort')</h5>
                        <p class="font-din text-30 text-secondary tracking-text leading-snug font-light">@lang('Comply with legal regulations without the need for manual documentation')</p>
                    </div>
                </div>
                <div class="control__item lg:flex md:mb-0 mb-5">
                    <div class="control__icon lg:mr-8 text mx-auto mb-5">
                        <img src="{{asset('img/icons/home-icon_red.svg')}}" alt="">
                    </div>
                    <div class="control__left lg:text-left text-center">
                        <h5 class="text-red text-20 font-cocogoose font-black tracking-heading leading-snug mb-3 md:mb-8 uppercase">
                            @lang('Avoid stock loss')
                        </h5>
                        <p class="font-din text-30 text-secondary tracking-text leading-snug font-light">
                            @lang('Immediate alarms for threshold violations prevent product damage')
                        </p>
                    </div>
                </div>
                <div class="control__item lg:flex md:mb-0 mb-5">
                    <div class="control__icon lg:mr-8 text mx-auto mb-5">
                        <img src="{{asset('img/icons/message-icon_orange.svg')}}" alt="">
                    </div>
                    <div class="control__left lg:text-left text-center">
                        <h5 class="text-gold text-20 font-cocogoose font-black tracking-heading leading-snug mb-3 md:mb-8 uppercase">
                            @lang('Avoid reputation damages')
                        </h5>
                        <p class="font-din text-30 text-secondary tracking-text leading-snug font-light">
                            @lang('Alarms allow quick intervention in the event of threshold violations')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 md:py-16 xl:py-28 bg-grey-light">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50 lg:mb-2 uppercase tracking-heading">
                @lang('The most <span class="text-green"> affordable and uncomplicated </span>solution')
            </h2>
            <p class="text-center font-light font-din text-30 text-secondary tracking-text mb-26">
                @lang('Exclude manual checks and product damage with Lumiform’s affordable temperature and humidity tracking system. When temperature or humidity moves out of the safe range, you are alerted immediately.')
            </p>
            @include('components.solution.industries_droptown_section',[
            'items' => [
            ['srcset' => ['group-4742.png','group-4742@2x.png'],'title' => __('Define sensor specifics'),'desc' => __('Define the site, device title, thresholds, alarm delays and users to be alerted, per sensor. ')],
            ['srcset' => ['group-4740.png','group-4740@2x.png'],'title' => __('Get real-time data'),'desc' => __('View history and real-time data of all your devices (temperature & humidity) anytime, anywhere.')],
            ['srcset' => ['group-4739.png','group-4739@2x.png'],'title' => __('Alarms'),'desc' => __('Our system notifies assigned users of threshold violations by E-mail, SMS or Push-Notifications.')],
            ['srcset' => ['group-3410.png','group-3410@2x.png'],'title' => __('Reports'),'desc' => __('All data flow automatically into an individual HACCP report, so you don’t have any manual work.')],
            ]
            ])

        </div>
    </section>
    <section class="xl:py-28 md:py-16 py-8 with__border--bottom steps">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50  uppercase tracking-heading mb-10 lg:mb-32">
                @lang('Get started within minutes, in <span class="text-light-blue"> three simple steps  </span>')
            </h2>
            <div class="flex  flex-col lg:flex-row-reverse justify-between lg:mb-32 mb-10">
                <div class="issue__item--text w-full lg:w-6/12 flex flex-col justify-center lg:items-end ">
                    <div class="flex issue__item--bg pt-8 lg:pt-12">
                        <span class="text-50 md:text-80 text-secondary leading-none pl-12 font-cocogoose">1</span>
                        <div class="lg:pl-12 pl-6">
                            <h3 class="text-left text-38 font-bold font-cocogoose uppercase mb-3 lg:mb-5 text-purple">
                                @lang('Buy monitoring kit')
                            </h3>
                            <p class="text-left text-secondary font-hairline text-30 font-din mb-5 sm:mb-0 font-light">
                                @lang('Buy the temperature and humidity sensors, either directly from our partner or through us. <br><br>We need to know two things:')
                            </p>
                            <ul class="mt-2 lg:mt-10">
                                <li class="text-20 text-purple font-black font-cocogoose uppercase">@lang('1. How many sensors do you need?')</li>
                                <li class="text-20 text-purple font-black font-cocogoose uppercase">@lang('2. How large is the area to be monitored?')</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="digitise__item--image w-5/12 lg:mx-0 mx-auto lg:mt-0 mt-3">
                    <img src="{{asset('img/group-3597.png')}}" alt="" class="mx-auto"
                         srcset="{{asset('img/group-3597.png')}},{{asset('img/group-3597@2x.png')}} 2x">
                </div>
            </div>
            <div class="flex  flex-col lg:flex-row-reverse justify-between lg:mb-32 mb-10">
                <div class="issue__item--text w-full lg:w-6/12 flex flex-col justify-center lg:items-end ">
                    <div class="flex issue__item--bg pt-8 lg:pt-12">
                        <span class="text-50 md:text-80 text-secondary leading-none pl-12 font-cocogoose">2</span>
                        <div class="lg:pl-12 pl-6">
                            <h3 class="text-left text-38 font-bold font-cocogoose uppercase mb-3 lg:mb-5 text-light-blue">
                                @lang('Install sensors')
                            </h3>
                            <p class="text-left text-secondary font-hairline text-15 lg:text-30 font-din mb-5 sm:mb-0 font-light">
                                @lang('Install the sensors anywhere within your devices or premises.')
                            </p>
                        </div>
                    </div>

                </div>

                <div class="digitise__item--image w-5/12 lg:mx-0 mx-auto lg:mt-0 mt-3">
                    <img src="{{asset('img/group-4741.png')}}" alt="" class="mx-auto"
                         srcset="{{asset('img/group-4741.png')}},{{asset('img/group-4741@2x.png')}} 2x">
                </div>
            </div>
            <div class="flex  flex-col lg:flex-row-reverse justify-between lg:mb-32 mb-10">
                <div class="issue__item--text w-full lg:w-6/12 flex flex-col justify-center lg:items-end ">
                    <div class="flex issue__item--bg pt-8 lg:pt-12">
                        <span class="text-50 md:text-80 text-secondary leading-none pl-12 font-cocogoose">3</span>
                        <div class="lg:pl-12 pl-6">
                            <h3 class="text-left text-38 font-bold font-cocogoose uppercase mb-3 lg:mb-5 text-green">
                                @lang('Start tracking')
                            </h3>
                            <p class="text-left text-secondary font-hairline text-15 lg:text-30 font-din mb-5 sm:mb-0 font-light">
                                @lang('All sensors send real-time data to our cloud, via the gateway. View all data in the system at a glance. Set the alarm and documentation settings quickly, in the Lumiform App.')
                            </p>
                        </div>
                    </div>

                </div>

                <div class="digitise__item--image w-5/12 lg:mx-0 mx-auto lg:mt-0 mt-3">
                    <img src="{{asset('img/group-3405.png')}}" alt="" class="mx-auto"
                         srcset="{{asset('img/group-3405.png')}},{{asset('img/group-3405@2x.png')}} 2x">
                </div>
            </div>
        </div>
    </section>
    <section class="py-8 md:py-16 xl:py-32 bg-red-opacity">
        <div class="container mx-auto">
            <h2 class="font-cocogoose text-50 font-black leading-none tracking-text text-white uppercase text-center mb-12">
                @lang('Buy your first sensors and test for <span class="line__break"></span> 14 days, free of charge!')
            </h2>
            <div class="flex justify-center">
                <a href="#"
                   class="font-extrabold text-20 bg-red text-white uppercase font-cocogoose px-5 lg:px-10 py-6 rounded-20 tracking-large">
                    @lang('Buy Sensors and test for free')
                </a>
            </div>
        </div>
    </section>
    <section class="py-8 md:py-16 xl:py-28 bg-grey-light">
        <div class="container mx-auto">
            <h2 class="font-bold text-center font-cocogoose text-primary text-50  uppercase tracking-heading mb-10 lg:mb-32">
                @lang('The <span class="text-green"> most affordable monitoring solution </span>on the market')
            </h2>

            <div class="sensors__monitoring">
                <div class="monitoring__items flex lg:flex-no-wrap flex-wrap justify-around">
                    <div class="monitoring__item relative pt-10 lg:mb-0 mb-6">
                        <div class="monitoring__circle bg-white rounded-full"></div>
                        <div class="monitoring__text relative">
                            <h3 class="text-50 text-center font-cocogoose font-black text-red leading-snug tracking-large uppercase">
                                @lang('sensors')
                            </h3>
                            <p class="font-din text-20 text-secondary font-light leading-snug tracking-text text-center mb-5">
                                @lang('One-off payment')
                            </p>
                            <span class="text-80 font-hairline font-cocogoose text-primary leading-snug block text-center">
                                25€
                            </span>
                            <h5 class="font-cocogoose font-black text-20 text-red text-center mt-12 leading-snug tracking-large uppercase">
                                @lang('Per sensor')
                            </h5>
                        </div>
                    </div>
                    <div class="monitoring__item relative pt-10 lg:mb-0 mb-6">
                        <div class="monitoring__circle bg-white rounded-full"></div>
                        <div class="monitoring__text relative">
                            <h3 class="text-50 text-center font-cocogoose font-black text-green leading-snug tracking-large uppercase">
                                @lang('GATEWAY')
                            </h3>
                            <p class="font-din text-20 text-secondary font-light leading-snug tracking-text text-center mb-5">
                                @lang('One-off payment')
                            </p>
                            <span class="text-80 font-hairline font-cocogoose text-primary leading-snug block text-center">
                                50€
                            </span>
                            <h5 class="font-cocogoose font-black text-20 text-green text-center mt-12 leading-snug tracking-large uppercase">
                                @lang('Per Gateway')
                            </h5>
                        </div>
                    </div>
                    <div class="monitoring__item relative pt-10">
                        <div class="monitoring__circle bg-white rounded-full"></div>
                        <div class="monitoring__text relative">
                            <h3 class="text-50 text-center font-cocogoose font-black text-light-blue leading-snug tracking-large uppercase">
                                @lang('SOFTWARE')
                            </h3>
                            <p class="font-din text-20 text-secondary font-light leading-snug tracking-text text-center mb-5">
                                @lang('Monthly payment')
                            </p>
                            <span class="text-80 font-hairline font-cocogoose text-primary leading-snug block text-center">
                                <span>&le;</span>3,90€*
                            </span>
                            <h5 class="font-cocogoose font-black text-20 text-light-blue text-center mt-12 leading-snug tracking-large uppercase">
                                @lang('Per sensor / month')
                            </h5>
                            <span class="block font-din text-16 font-thin text-center text-grey-bold">@lang('*Dependent on quantity')</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @include('components.use-cases.section_companies',['fontSize' => 'text-20'])
    <section class="py-12 lg:pt-32 pb-16 bg-grey-light">
        <div class="container mx-auto">
            <h1 class="tracking-normal text-primary text-center  text-30 mb-16 font-cocogoose uppercase font-extrabold">
                @lang('USED FOR VARIOUS DIFFERENT USE CASES')
            </h1>
            <div class="flex justify-center sm:flex-no-wrap flex-wrap">
                @include('components.product.icons_raw',[
                            'text' => __('Refrigerators'),
                            'image' => 'icons/burger.svg',
                            'class' => 'mx-12  md:mb-20 mb-5',
                            ])

                @include('components.product.icons_raw',[
                            'text' => __('Freezers'),
                            'image' => 'icons/manufactur.svg',
                            'class' => 'mx-12  md:mb-20 mb-5',
                            ])
                @include('components.product.icons_raw',[
                            'text' => __('Heating equipment'),
                            'image' => 'icons/heating-icon_blue.svg',
                            'class' => 'mx-12  md:mb-20 mb-5',
                            ])

                @include('components.product.icons_raw',[
                            'text' => __('Cold storage'),
                            'image' => 'icons/facility.svg',
                            'class' => 'mx-12  md:mb-20 mb-5',
                            ])

            </div>
        </div>
    </section>
    @include('components.resources.faq',['heading' => 'FREQUENTLY ASKED QUESTIONS','sections' => [
    [
        ['title' => __('How does the gateway send data to the cloud?'),'text' => __('A base is a collection of related tables, often reflecting a single project, process, or workflow that you collaborate on with your team. For example, you could make a base to organize your sales process, with tables for sales leads, companies, and deal opportunities. Each table contains records (similar to rows in a spreadsheet), which represent the individual objects, ideas, or people that you’re tracking. You’re free to create as many bases as you’d like on any of our plans.')],
        ['title' => __('How long is the battery life?'),'text' => __('A base is a collection of related tables, often reflecting a single project, process, or workflow that you collaborate on with your team. For example, you could make a base to organize your sales process, with tables for sales leads, companies')],
        ['title' => __('What if I don’t have Wifi?'),'text' => __('A base is a collection of related tables, often reflecting a single project, process, or workflow that you collaborate on with your team. For example, you could make a base to organize your sales process, with tables for sales leads, companies')],
        ['title' => __('What’s the accuracy of the sensors?'),'text' => __('A base is a collection of related tables, often reflecting a single project, process, or workflow that you collaborate on with your team. For example, you could make a base to organize your sales process, with tables for sales leads, companies')],
        ],
        [
        ['title' => __('Whats the temperature and humidity range of the sensors?'),'text' => __('A base is a collection of related tables, often reflecting a single project, process, or workflow that you collaborate on with your team. For example, you could make a base to organize your sales process, with tables for sales leads, companies, and deal opportunities. Each table contains records (similar to rows in a spreadsheet), which represent the individual objects, ideas, or people that you’re')],
        ['title' => __('What happens when the battery is flat?'),'text' => __('A base is a collection of related tables, often reflecting a single project, process, or workflow that you collaborate on with your team. For example, you could make a base to organize your sales process, with tables for sales leads, companies, and deal opportunities. Each table contains records (similar to rows in a spreadsheet), which represent the individual objects, ideas, or people that you’re')],
        ['title' => __('Is the documentation recognised by the authorities?'),'text' => __('A base is a collection of related tables, often reflecting a single project, process, or workflow that you collaborate on with your team. For example, you could make a base to organize your sales process, with tables for sales leads, companies, and deal opportunities. Each table contains records (similar to rows in a spreadsheet), which represent the individual objects, ideas, or people that you’re')],
        ['title' => __('Can I also use the sensors for transportation use cases?'),'text' => __('A base is a collection of related tables, often reflecting a single project, process, or workflow that you collaborate on with your team. For example, you could make a base to organize your sales process, with tables for sales leads, companies, and deal opportunities. Each table contains records (similar to rows in a spreadsheet), which represent the individual objects, ideas, or people that you’re')],
        ],
        [
        ['title' => __('Which sensor technology do you use?'),'text' => __('A base is a collection of related tables, often reflecting a single project, process, or workflow that you collaborate on with your team. For example, you could make a base to organize your sales process, with tables for sales leads, companies, and deal opportunities. Each table contains records (similar to rows in a spreadsheet), which represent the individual objects, ideas, or people that you’re')],
        ['title' => __('How much does the gateway cost?'),'text' => __('A base is a collection of related tables, often reflecting a single project, process, or workflow that you collaborate on with your team. For example, you could make a base to organize your sales process, with tables for sales leads, companies, and deal opportunities. Each table contains records (similar to rows in a spreadsheet), which represent the individual objects, ideas, or people that you’re')],
        ['title' => __('What is the payment model?'),'text' => __('A base is a collection of related tables, often reflecting a single project, process, or workflow that you collaborate on with your team. For example, you could make a base to organize your sales process, with tables for sales leads, companies, and deal opportunities. Each table contains records (similar to rows in a spreadsheet), which represent the individual objects, ideas, or people that you’re')],
        ['title' => __('What is the transmission frequency?'),'text' => __('A base is a collection of related tables, often reflecting a single project, process, or workflow that you collaborate on with your team. For example, you could make a base to organize your sales process, with tables for sales leads, companies, and deal opportunities. Each table contains records (similar to rows in a spreadsheet), which represent the individual objects, ideas, or people that you’re')],
        ],
     ]])
@endsection
