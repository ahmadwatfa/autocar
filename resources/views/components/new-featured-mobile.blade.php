@if (isset($ads_spical) && $ads_spical->count() > 0)
@foreach ($ads_spical as $key => $ad)
        <div class="articles">
            <div class="article-grid">
                <div class="article-card" id="{{$ad->id}}">
                    <div class="article-thumbnail">
                        <a href="{{ route('ads-car.show', $ads_spical[0]->id) }}">
                            <img src="{{ asset('images/advs/' . $media[$ad->id]->file_name) }}" alt="xxx">
                        </a>
                    </div>
                    <div class="article-article">
                        <h3>{{ $ad->price == 0 ? '' : $ad->price . ' ' . __('messages.aed') }}</h3>
                        <div class="ads-price">
                            <span>Nissan </span><span>Patrol 2016</span>
                        </div>
                        <div class="ads-call">
                            <span><i class="bi bi-telephone"></i></span>
                        </div>
                        <div class="row article-info">
                            <div class="col-sm article-details">
                                <span><i class="bi bi-calendar4"></i></span>
                                <br>
                                <span>2016</span>
                            </div>
                            <div class="col-sm article-details">
                                <span><i class="bi bi-speedometer2"></i></span>
                                <br>
                                <span>{{ '22000 ' . __('messages.km') }}</span>
                            </div>
                            <div class="col-sm article-details">
                                <span><i class="bi bi-geo-alt"></i></span>
                                <br>
                                <span>Dubai</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
@endif
