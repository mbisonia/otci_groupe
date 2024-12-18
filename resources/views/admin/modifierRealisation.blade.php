@extends('admin.app')

@section('page_title')
    OTCI GROUPE
@endsection

@section('content')


<section class="main_content dashboard_part large_header_bg">
      <div class="container-fluid g-0">
        <div class="row">
          <div class="col-lg-12 p-0">
            <div
              class="header_iner d-flex justify-content-between align-items-center"
            >
              <div class="sidebar_icon d-lg-none">
                <i class="ti-menu"></i>
              </div>
              <div class="serach_field-area d-flex align-items-center">
                <div class="search_inner">
                  <form action="#">
                    <div class="search_field">
                      <input type="text" placeholder="Search here..." />
                    </div>
                    <button type="submit">
                      <img src="img/icon/icon_search.svg" alt />
                    </button>
                  </form>
                </div>
                <span class="f_s_14 f_w_400 ml_25 white_text text_white"
                  >Apps</span
                >
              </div>
              <div
                class="header_right d-flex justify-content-between align-items-center"
              >
                <div class="header_notification_warp d-flex align-items-center">
                  <li>
                    <a
                      class="bell_notification_clicker nav-link-notify"
                      href="#"
                    >
                      <img src="img/icon/bell.svg" alt />
                    </a>

                    <div class="Menu_NOtification_Wrap">
                      <div class="notification_Header">
                        <h4>Notifications</h4>
                      </div>
                      <div class="Notification_body">
                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="img/staf/2.png" alt /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>Cool Marketing</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="img/staf/4.png" alt /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>Awesome packages</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="img/staf/3.png" alt /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>what a packages</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="img/staf/2.png" alt /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>Cool Marketing</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="img/staf/4.png" alt /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>Awesome packages</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>

                        <div class="single_notify d-flex align-items-center">
                          <div class="notify_thumb">
                            <a href="#"><img src="img/staf/3.png" alt /></a>
                          </div>
                          <div class="notify_content">
                            <a href="#"><h5>what a packages</h5></a>
                            <p>Lorem ipsum dolor sit amet</p>
                          </div>
                        </div>
                      </div>
                      <div class="nofity_footer">
                        <div class="submit_button text-center pt_20">
                          <a href="#" class="btn_1">See More</a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <a class="CHATBOX_open nav-link-notify" href="#">
                      <img src="img/icon/msg.svg" alt />
                    </a>
                  </li>
                </div>
                <div class="profile_info">
                                <img src="img/client_img.png" alt="#">
                                <div class="profile_info_iner">
                                    <div class="profile_author_name">

                                        <h5>{{ auth()->user()->name }}</h5>
                                    </div>
                                    <div class="profile_info_details">

                                        <a href="{{ route('logout') }}">SE DECONNECTER</a>
                                    </div>
                                </div>
                            </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="main_content_iner">
        <div class="container-fluid p-0 sm_padding_15px">
          <div class="row justify-content-center">



            <div class="col-lg-12">
              <div class="white_card card_height_100 mb_30">

                <div class="white_card_body">
                  <div class="card-body">
                    <form action="{{ route ('updateRealisation', $realisation->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <label class="form-label"
                            >Titre</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            name="titre"
                            value="{{ $realisation->titre }}"
                          />
                        </div>
                        <div class="col-md-6">
                          <label class="form-label"
                            >Maitre</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            name="maitre"
                            value="{{ $realisation->maitre }}"
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <label class="form-label"
                            >Partenaire</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            name="partenaire"
                            value="{{ $realisation->partenaire }}"
                          />
                        </div>
                        <div class="col-md-6">
                          <label class="form-label"
                            >Montant</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            name="montant"
                            value="{{ $realisation->montant }}"
                          />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <label class="form-label"
                            >Mission</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            name="mission"
                            value="{{ $realisation->mission }}"
                          />
                        </div>
                        <div class="col-md-6">
                          <label class="form-label"
                            >Date</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            name="datee"
                            value="{{ $realisation->datee }}"
                          />
                        </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label"
                          >Sous_categorie</label
                        >
                        <select name="sous_categorie_id" id="sous_categorie_id" class="form-control">
                   @foreach ($categorie as $cate)
                   <option value="{{$cate->id}}" {{ $cate->id == $realisation->sous_categorie_id ? 'selected' : '' }}" {{ $cate->id == $realisation->sous_categorie_id ? 'selected' : '' }}>{{ $cate->nom }}</option>
                    @endforeach
                </select>
                      </div>
                      <div class="mb-3">
                        <label class="form-label"
                          >Description</label
                        >
                        <textarea name="description" class="form-control" >{{ $realisation->description }}</textarea>
                      </div>
                      <div class="mb-3">
                        <label class="form-label"
                          >Image</label
                        >
                        <input
                          type="file"
                          class="form-control"
                          name="image" id="image"
                          value="upload/images/{{ $realisation->image }}"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label"
                          >Galerie</label
                        >
                        <input
                          type="file"
                          class="form-control"
                          name="galerie[]"  multiple id="galerie"
                          value="upload/gallery/{{ $realisation->galerie }}"
                        />
</div>

                      <button type="submit" class="btn btn-primary">
                        Enregistrer
                      </button>

                      <a href="{{ route('realisation-a') }}" class="btn btn-primary">Annuler</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@include('admin.footer')
@endsection
