@extends('frontend.layouts.app')

@section('title','Search Result')

@section('content')

<div id="search-results">
    <section class="section-box mt-30">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 float-right">
                    <div class="content-page">
                        <div class="box-filters-job">
                            <div class="row">
                                <h2>Search Result</h2>
                            </div>
                        </div>
                        @if(count($jobs)>0)
                        <div class="row">
                            @foreach($jobs as $item)
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card-grid-2 hover-up">
                                    <div class="card-grid-2-image-left"><span class="flash"></span>
                                        <div class="image-box"><img src="{{ asset('uploads/' . $item->image) }}" alt="Image" width="50px" height="50px"></div>
                                        <div class="right-info"><a class="name-job" href="company-details.html">{{$item->company->name}}</a><span class="location-small">{{$item->location->name}}</span></div>
                                    </div>
                                    <div class="card-block-info">
                                        <h6><a href="{{route('job.details',$item->id)}}">{{$item->title}}</a></h6>
                                        <div class="mt-5"><span class="card-briefcase">{{$item->category->name}}</span><span class="card-time">{{$item->created_at}}</span></div>
                                        <p class="font-sm color-text-paragraph mt-15">{{ Str::words($item->description, $words = 20, $end = '...') }}</p>
                                        <div class="row">
                                            {{-- @foreach($item->tag as $tag)
                                            <div class="mt-5 col-xl-4 col-md-4 col-sm-4 "><a class="btn btn-grey-small mr-5" href="jobs-grid.html">{{$tag}}</a>
                                            </div>
                                            @endforeach --}}
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-7"><span class="card-text-price">{{$item->salary}} TK</span></div>
                                                {{-- <div class="col-lg-5 col-5 text-end">
                                                    <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                </div> --}}
                                                {{-- <div class="col-lg-5 col-5 text-end">
                                                    <a href="{{ route('add.to.cart', $item->id) }}" class="btn btn-apply-now">Add to Cart</a>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="paginations">
                        {{-- {{ $jobs->links() }} --}}
                        {{ $jobs->links('pagination::bootstrap-5') }}
                        {{-- {!! $jobs->withQueryString()->links('pagination::bootstrap-5')!!} --}}
                    </div>
                    @else
                    <h1>No Data Found</h1>
                    @endif
                </div>
                
            </div>
        </div>
    </section>
</div>

@endsection