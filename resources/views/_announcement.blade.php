<div class="col-sm-12 col-md-4">
    <!-- product card -->
    <div class="product-item bg-light">
            <div class="card" style="height: 20rem">
                <div class="thumb-content">
                    <a href="#">
                        @if(count($announcement->images) > 0)
                                <img src="{{ $announcement->images()->first()->getUrl(330, 250) }}"
                                class="rounded float-right" alt="">
                        @endif
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title"><a
                            href="{{route('announcement.show', $announcement->id )}}">{{ $announcement->title }}</a>
                    </h4>
                    <ul class="list-inline product-meta">
                        <li class="list-inline-item">
                            <a
                                href="{{route('public.announcements.category', [ $announcement->category->name, $announcement->category->id ])}}"><i
                                    class="fa fa-folder-open-o"></i>{{ $announcement->category->name }}</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-calendar"></i> {{ $announcement->created_at->format('d/m/Y') }} -
                            <strong class="text-uppercase">{{ $announcement->user->name }}</strong>
                        </li>
                    </ul>
                    <p class="card-text">{{substr($announcement->body, 0, 40)}}...</p>
                    <div class="product-ratings">
                        <ul class="list-inline">
                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</div>

