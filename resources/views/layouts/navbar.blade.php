<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="{{ asset('assets/img/logo.png') }}" alt="" height="25" style="float: left; margin-right: 10px;" /> admin</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('assets/icons/group.png') }}" alt="" /> Users <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('users') }}"><i class="fa fa-users" aria-hidden="true"></i> Show users</a></li>
                        <li><a href="{{ url('users', 'create') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Create new users</a></li>
                        <li><a href="{{ url('users', 'logs') }}"><i class="fa fa-history" aria-hidden="true"></i> Show logs users</a></li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('assets/icons/table.png') }}" alt="" /> Orders <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('orders') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Show orders</a></li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('assets/icons/chart_bar.png') }}" alt="" /> Stats for Refer <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('refer') }}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Actions</a></li>
                        <li><a href="{{ url('refer', 'top') }}"><i class="fa fa-bar-chart" aria-hidden="true"></i> Top 10</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('assets/icons/tag_green.png') }}" alt="" /> Discount coupons <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('coupons') }}"><i class="fa fa-tag" aria-hidden="true"></i> Show coupons</a></li>
                        <li><a href="{{ url('coupons', 'create') }}"><i class="fa fa-plus-square" aria-hidden="true"></i> Create new coupon</a></li>
                        <li><a href="{{ url('prices') }}"><i class="fa fa-certificate" aria-hidden="true"></i> Show discount price list</a></li>
                        <li><a href="{{ url('prices', 'create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Create new discount price</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" method="get" role="search" action="{{ url('users') }}">
                <div class="form-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Search a@email.com">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>