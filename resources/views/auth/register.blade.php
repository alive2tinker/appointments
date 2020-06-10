@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('strings.new_registration') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('strings.name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="identity" class="col-md-4 col-form-label text-md-right">{{ __('strings.identity') }}</label>

                            <div class="col-md-6">
                                <input id="identity" type="text" class="form-control @error('identity') is-invalid @enderror" name="identity" value="{{ old('identity') }}" required>

                                @error('identity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('strings.nationality') }}</label>

                            <div class="col-md-6">
                                <select name="nationality" class="form-control" id="nationality">
                                    <option value="">{{__('strings.choose')}}</option>
                                    <option value="afghan">{{__('strings.afghan')}}</option>
                                    <option value="albanian">{{__('strings.albanian')}}</option>
                                    <option value="algerian">{{__('strings.algerian')}}</option>
                                    <option value="american">{{__('strings.american')}}</option>
                                    <option value="andorran">{{__('strings.andorran')}}</option>
                                    <option value="angolan">{{__('strings.angolan')}}</option>
                                    <option value="antiguans">{{__('strings.antiguans')}}</option>
                                    <option value="argentinean">{{__('strings.argentinean')}}</option>
                                    <option value="armenian">{{__('strings.armenian')}}</option>
                                    <option value="australian">{{__('strings.australian')}}</option>
                                    <option value="austrian">{{__('strings.austrian')}}</option>
                                    <option value="azerbaijani">{{__('strings.azerbaijani')}}</option>
                                    <option value="bahamian">{{__('strings.bahamian')}}</option>
                                    <option value="bahraini">{{__('strings.bahraini')}}</option>
                                    <option value="bangladeshi">{{__('strings.bangladeshi')}}</option>
                                    <option value="barbadian">{{__('strings.barbadian')}}</option>
                                    <option value="batswana">{{__('strings.batswana')}}</option>
                                    <option value="belarusian">{{__('strings.belarusian')}}</option>
                                    <option value="belgian">{{__('strings.belgian')}}</option>
                                    <option value="belizean">{{__('strings.belizean')}}</option>
                                    <option value="beninese">{{__('strings.beninese')}}</option>
                                    <option value="bhutanese">{{__('strings.bhutanese')}}</option>
                                    <option value="bolivian">{{__('strings.bolivian')}}</option>
                                    <option value="bosnian">{{__('strings.bosnian')}}</option>
                                    <option value="brazilian">{{__('strings.brazilian')}}</option>
                                    <option value="british">{{__('strings.british')}}</option>
                                    <option value="bruneian">{{__('strings.bruneian')}}</option>
                                    <option value="bulgarian">{{__('strings.bulgarian')}}</option>
                                    <option value="burkinabe">{{__('strings.burkinabe')}}</option>
                                    <option value="burmese">{{__('strings.burmese')}}</option>
                                    <option value="burundian">{{__('strings.burundian')}}</option>
                                    <option value="cambodian">{{__('strings.cambodian')}}</option>
                                    <option value="cameroonian">{{__('strings.cameroonian')}}</option>
                                    <option value="canadian">{{__('strings.canadian')}}</option>
                                    <option value="cape verdean">{{__('strings.cape verdean')}}</option>
                                    <option value="central african">{{__('strings.central african')}}</option>
                                    <option value="chadian">{{__('strings.chadian')}}</option>
                                    <option value="chilean">{{__('strings.chilean')}}</option>
                                    <option value="chinese">{{__('strings.chinese')}}</option>
                                    <option value="colombian">{{__('strings.colombian')}}</option>
                                    <option value="comoran">{{__('strings.comoran')}}</option>
                                    <option value="congolese">{{__('strings.congolese')}}</option>
                                    <option value="costa rican">{{__('strings.costa rican')}}</option>
                                    <option value="croatian">{{__('strings.croatian')}}</option>
                                    <option value="cuban">{{__('strings.cuban')}}</option>
                                    <option value="cypriot">{{__('strings.cypriot')}}</option>
                                    <option value="czech">{{__('strings.czech')}}</option>
                                    <option value="danish">{{__('strings.danish')}}</option>
                                    <option value="djibouti">{{__('strings.djibouti')}}</option>
                                    <option value="dominican">{{__('strings.dominican')}}</option>
                                    <option value="dutch">{{__('strings.dutch')}}</option>
                                    <option value="east timorese">{{__('strings.east timorese')}}</option>
                                    <option value="ecuadorean">{{__('strings.ecuadorean')}}</option>
                                    <option value="egyptian">{{__('strings.egyptian')}}</option>
                                    <option value="emirian">{{__('strings.emirian')}}</option>
                                    <option value="equatorial guinean">{{__('strings.equatorial guinean')}}</option>
                                    <option value="eritrean">{{__('strings.eritrean')}}</option>
                                    <option value="estonian">{{__('strings.estonian')}}</option>
                                    <option value="ethiopian">{{__('strings.ethiopian')}}</option>
                                    <option value="fijian">{{__('strings.fijian')}}</option>
                                    <option value="filipino">{{__('strings.filipino')}}</option>
                                    <option value="finnish">{{__('strings.finnish')}}</option>
                                    <option value="french">{{__('strings.french')}}</option>
                                    <option value="gabonese">{{__('strings.gabonese')}}</option>
                                    <option value="gambian">{{__('strings.gambian')}}</option>
                                    <option value="georgian">{{__('strings.georgian')}}</option>
                                    <option value="german">{{__('strings.german')}}</option>
                                    <option value="ghanaian">{{__('strings.ghanaian')}}</option>
                                    <option value="greek">{{__('strings.greek')}}</option>
                                    <option value="grenadian">{{__('strings.grenadian')}}</option>
                                    <option value="guatemalan">{{__('strings.guatemalan')}}</option>
                                    <option value="guinean">{{__('strings.guinean')}}</option>
                                    <option value="guyanese">{{__('strings.guyanese')}}</option>
                                    <option value="haitian">{{__('strings.haitian')}}</option>
                                    <option value="herzegovinian">{{__('strings.herzegovinian')}}</option>
                                    <option value="honduran">{{__('strings.honduran')}}</option>
                                    <option value="hungarian">{{__('strings.hungarian')}}</option>
                                    <option value="icelander">{{__('strings.icelander')}}</option>
                                    <option value="indian">{{__('strings.indian')}}</option>
                                    <option value="indonesian">{{__('strings.indonesian')}}</option>
                                    <option value="iranian">{{__('strings.iranian')}}</option>
                                    <option value="iraqi">{{__('strings.iraqi')}}</option>
                                    <option value="irish">{{__('strings.irish')}}</option>
                                    <option value="israeli">{{__('strings.israeli')}}</option>
                                    <option value="italian">{{__('strings.italian')}}</option>
                                    <option value="ivorian">{{__('strings.ivorian')}}</option>
                                    <option value="jamaican">{{__('strings.jamaican')}}</option>
                                    <option value="japanese">{{__('strings.japanese')}}</option>
                                    <option value="jordanian">{{__('strings.jordanian')}}</option>
                                    <option value="kazakhstani">{{__('strings.kazakhstani')}}</option>
                                    <option value="kenyan">{{__('strings.kenyan')}}</option>
                                    <option value="kittian and nevisian">{{__('strings.kittian and nevisian')}}</option>
                                    <option value="kuwaiti">{{__('strings.kuwaiti')}}</option>
                                    <option value="kyrgyz">{{__('strings.kyrgyz')}}</option>
                                    <option value="laotian">{{__('strings.laotian')}}</option>
                                    <option value="latvian">{{__('strings.latvian')}}</option>
                                    <option value="lebanese">{{__('strings.lebanese')}}</option>
                                    <option value="liberian">{{__('strings.liberian')}}</option>
                                    <option value="libyan">{{__('strings.libyan')}}</option>
                                    <option value="liechtensteiner">{{__('strings.liechtensteiner')}}</option>
                                    <option value="lithuanian">{{__('strings.lithuanian')}}</option>
                                    <option value="luxembourger">{{__('strings.luxembourger')}}</option>
                                    <option value="macedonian">{{__('strings.macedonian')}}</option>
                                    <option value="malagasy">{{__('strings.malagasy')}}</option>
                                    <option value="malawian">{{__('strings.malawian')}}</option>
                                    <option value="malaysian">{{__('strings.malaysian')}}</option>
                                    <option value="maldivan">{{__('strings.maldivan')}}</option>
                                    <option value="malian">{{__('strings.malian')}}</option>
                                    <option value="maltese">{{__('strings.maltese')}}</option>
                                    <option value="marshallese">{{__('strings.marshallese')}}</option>
                                    <option value="mauritanian">{{__('strings.mauritanian')}}</option>
                                    <option value="mauritian">{{__('strings.mauritian')}}</option>
                                    <option value="mexican">{{__('strings.mexican')}}</option>
                                    <option value="micronesian">{{__('strings.micronesian')}}</option>
                                    <option value="moldovan">{{__('strings.moldovan')}}</option>
                                    <option value="monacan">{{__('strings.monacan')}}</option>
                                    <option value="mongolian">{{__('strings.mongolian')}}</option>
                                    <option value="moroccan">{{__('strings.moroccan')}}</option>
                                    <option value="mosotho">{{__('strings.mosotho')}}</option>
                                    <option value="motswana">{{__('strings.motswana')}}</option>
                                    <option value="mozambican">{{__('strings.mozambican')}}</option>
                                    <option value="namibian">{{__('strings.namibian')}}</option>
                                    <option value="nauruan">{{__('strings.nauruan')}}</option>
                                    <option value="nepalese">{{__('strings.nepalese')}}</option>
                                    <option value="new zealander">{{__('strings.new zealander')}}</option>
                                    <option value="nicaraguan">{{__('strings.nicaraguan')}}</option>
                                    <option value="nigerien">{{__('strings.nigerien')}}</option>
                                    <option value="north korean">{{__('strings.north korean')}}</option>
                                    <option value="northern irish">{{__('strings.northern irish')}}</option>
                                    <option value="norwegian">{{__('strings.norwegian')}}</option>
                                    <option value="omani">{{__('strings.omani')}}</option>
                                    <option value="pakistani">{{__('strings.pakistani')}}</option>
                                    <option value="palauan">{{__('strings.palauan')}}</option>
                                    <option value="panamanian">{{__('strings.panamanian')}}</option>
                                    <option value="papua new guinean">{{__('strings.papua new guinean')}}</option>
                                    <option value="paraguayan">{{__('strings.paraguayan')}}</option>
                                    <option value="peruvian">{{__('strings.peruvian')}}</option>
                                    <option value="polish">{{__('strings.polish')}}</option>
                                    <option value="portuguese">{{__('strings.portuguese')}}</option>
                                    <option value="qatari">{{__('strings.qatari')}}</option>
                                    <option value="romanian">{{__('strings.romanian')}}</option>
                                    <option value="russian">{{__('strings.russian')}}</option>
                                    <option value="rwandan">{{__('strings.rwandan')}}</option>
                                    <option value="saint lucian">{{__('strings.saint lucian')}}</option>
                                    <option value="salvadoran">{{__('strings.salvadoran')}}</option>
                                    <option value="samoan">{{__('strings.samoan')}}</option>
                                    <option value="san marinese">{{__('strings.san marinese')}}</option>
                                    <option value="sao tomean">{{__('strings.sao tomean')}}</option>
                                    <option value="saudi">{{__('strings.saudi')}}</option>
                                    <option value="scottish">{{__('strings.scottish')}}</option>
                                    <option value="senegalese">{{__('strings.senegalese')}}</option>
                                    <option value="serbian">{{__('strings.serbian')}}</option>
                                    <option value="seychellois">{{__('strings.seychellois')}}</option>
                                    <option value="sierra leonean">{{__('strings.sierra leonean')}}</option>
                                    <option value="singaporean">{{__('strings.singaporean')}}</option>
                                    <option value="slovakian">{{__('strings.slovakian')}}</option>
                                    <option value="slovenian">{{__('strings.slovenian')}}</option>
                                    <option value="solomon islander">{{__('strings.solomon islander')}}</option>
                                    <option value="somali">{{__('strings.somali')}}</option>
                                    <option value="south african">{{__('strings.south african')}}</option>
                                    <option value="south korean">{{__('strings.south korean')}}</option>
                                    <option value="spanish">{{__('strings.spanish')}}</option>
                                    <option value="sri lankan">{{__('strings.sri lankan')}}</option>
                                    <option value="sudanese">{{__('strings.sudanese')}}</option>
                                    <option value="surinamer">{{__('strings.surinamer')}}</option>
                                    <option value="swazi">{{__('strings.swazi')}}</option>
                                    <option value="swedish">{{__('strings.swedish')}}</option>
                                    <option value="swiss">{{__('strings.swiss')}}</option>
                                    <option value="syrian">{{__('strings.syrian')}}</option>
                                    <option value="taiwanese">{{__('strings.taiwanese')}}</option>
                                    <option value="tajik">{{__('strings.tajik')}}</option>
                                    <option value="tanzanian">{{__('strings.tanzanian')}}</option>
                                    <option value="thai">{{__('strings.thai')}}</option>
                                    <option value="togolese">{{__('strings.togolese')}}</option>
                                    <option value="tongan">{{__('strings.tongan')}}</option>
                                    <option value="trinidadian or tobagonian">{{__('strings.trinidadian or tobagonian')}}</option>
                                    <option value="tunisian">{{__('strings.tunisian')}}</option>
                                    <option value="turkish">{{__('strings.turkish')}}</option>
                                    <option value="tuvaluan">{{__('strings.tuvaluan')}}</option>
                                    <option value="ugandan">{{__('strings.ugandan')}}</option>
                                    <option value="ukrainian">{{__('strings.ukrainian')}}</option>
                                    <option value="uruguayan">{{__('strings.uruguayan')}}</option>
                                    <option value="uzbekistani">{{__('strings.uzbekistani')}}</option>
                                    <option value="venezuelan">{{__('strings.venezuelan')}}</option>
                                    <option value="vietnamese">{{__('strings.vietnamese')}}</option>
                                    <option value="welsh">{{__('strings.welsh')}}</option>
                                    <option value="yemenite">{{__('strings.yemenite')}}</option>
                                    <option value="zambian">{{__('strings.zambian')}}</option>
                                    <option value="zimbabwean">{{__('strings.zimbabwean')}}</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('strings.phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('strings.password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('strings.password_confirmation') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('strings.register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
