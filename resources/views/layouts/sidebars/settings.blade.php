<?php /** @var \App\Services\SidebarService $sidebar */?>
@inject('sidebar', 'App\Services\SidebarService')
<aside class="main-sidebar">
    <section class="sidebar" style="height: auto">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li class="treeview">
                <a href="#">
                    <i class="fas fa-globe"></i>
                    <span>{{ __('entities.campaigns') }}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display:none">

                    @foreach (Auth::user()->campaigns as $campaign)
                    <li class="campaign-name">
                        <a href="{{ url(App::getLocale() . '/' . $campaign->getMiddlewareLink()) }}"><i class="fa fa-globe"></i> <span>{!! $campaign->name !!}</span></a>
                    </li>
                    @endforeach
                </ul>
            </li>

            <li class="{{ $sidebar->settings('profile') }}">
                <a href="{{ route('settings.profile') }}">
                    <i class="fa fa-user"></i> <span>{{ __('settings.menu.profile') }}</span>
                </a>
            </li>
            <li class="{{ $sidebar->settings('account') }}">
                <a href="{{ route('settings.account') }}">
                    <i class="fa fa-key"></i> <span>{{ __('settings.menu.account') }}</span>
                </a>
            </li>
            <li class="{{ $sidebar->settings('layout') }}">
                <a href="{{ route('settings.layout') }}">
                    <i class="fas fa-th-large"></i> <span>{{ __('settings.menu.layout') }}</span>
                </a>
            </li>

            <li class="header">{{ __('settings.menu.subscription') }}</li>
            <li class="{{ $sidebar->settings('boost') }}">
                <a href="{{ route('settings.boost') }}">
                    <i class="fa fa-rocket"></i> <span>{{ __('settings.menu.boost') }}</span>
                </a>
            </li>
            <li class="{{ $sidebar->settings('billing-information') }}">
                <a href="{{ route('settings.billing') }}">
                    <i class="far fa-circle"></i> <span>{{ __('settings.menu.billing') }}</span>
                </a>
            </li>
            <li class="{{ $sidebar->settings('subscription') }}">
                <a href="{{ route('settings.subscription') }}">
                    <i class="far fa-circle"></i> <span>{{ __('settings.menu.subscription_status') }}</span>
                </a>
            </li>
            <li class="{{ $sidebar->settings('invoices') }}">
                <a href="{{ route('settings.invoices') }}">
                    <i class="far fa-circle"></i> <span>{{ __('settings.menu.invoices') }}</span>
                </a>
            </li>

            <li class="header">{{ __('settings.menu.other') }}</li>
            @if (Auth::user()->hasPatreonSync())<li class="{{ $sidebar->settings('patreon') }}">
                <a href="{{ route('settings.patreon') }}">
                    <i class="fab fa-patreon"></i> <span>{{ __('settings.menu.patreon') }}</span>
                </a>
            </li>@endif

            <li class="{{ $sidebar->settings('apps') }}">
                <a href="{{ route('settings.apps') }}">
                    <i class="fab fa-discord"></i> <span>{{ __('settings.menu.apps') }}</span>
                </a>
            </li>
            <li class="{{ $sidebar->settings('api') }}">
                <a href="{{ route('settings.api') }}">
                    <i class="fas fa-code"></i> <span>{{ __('settings.menu.api') }}</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
