@php

#Get all root categories
$categories = \App\Models\Category::roots();

@endphp

<section>
        <div id="myOverlay" class="overlay"><span class="closebtn" style="color: #9baabf;" onclick="closeSearch()" title="Close Overlay">X</span>
            <div class="overlay-content">
                <form action="/action_page.php"><input class="form-control" type="text" placeholder="Search.." name="Search"><button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button></form>
            </div>
        </div>
        <ul class="nav nav-tabs mx-auto">
            <li class="nav-item"><a class="nav-link active" href="#">Shop By Category</a></li>

@foreach($categories as $category)
               @if($category->isParent())
              <li class="nav-item" @browsing($category) open @endif>
                  <a class="nav-link" href="{{ route('category', ['slug' => $category->slug]) }}">{{ $category->name }} <span> ({{ $category->totalProducts() }})</span></a>
                  @include('includes.components.subcategories', ['subcategories' => $category->subcategories])
               </li>
               @else
                  <a class="nav-link" href="{{ route('category', ['slug' => $category->slug]) }}">{{ $category->name }}<span> ({{ $category->totalProducts() }})</span> </a>
               @endif
            </div>
         @endforeach


        </ul>
    </section>

