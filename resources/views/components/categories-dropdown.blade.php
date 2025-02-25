
@props(['type','title', 'items'])

<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle " href="#" id="categoriesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{$title}}
  </a>
  <div class="dropdown-menu" id="categoriesDropdownMenu" aria-labelledby="categoriesDropdown">
    @foreach($items as $item)
    <a href="{{route($type.'.show', $item->slug) }}" class="dropdown-item">
     {{$item->name}}
    </a>
    @endforeach
  </div>
</li>




