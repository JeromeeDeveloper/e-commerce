{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="las la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Users" icon="las la-user" :link="backpack_url('user')" />

<x-backpack::menu-item title="Products" icon="las la-cube" :link="backpack_url('product')" />
<x-backpack::menu-item title="Categories" icon="las la-list-alt" :link="backpack_url('categories')" />
<x-backpack::menu-item title="Payments" icon="las la-credit-card" :link="backpack_url('payment')" />
<x-backpack::menu-item title="Reviews" icon="las la-star" :link="backpack_url('review')" />
<x-backpack::menu-item title="Order items" icon="las la-shopping-cart" :link="backpack_url('order-item')" />
