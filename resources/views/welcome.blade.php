@extends('layouts.app')

@section('title')
<title>Accueil - {{ config('app.name', 'Laravel') }}</title>
@endsection

@section('content')
    <h2><strong>Le comité de baptême</strong></h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Potenti nullam ac tortor vitae. Aliquet lectus proin nibh nisl condimentum id venenatis. Ullamcorper malesuada proin libero nunc consequat. Viverra nam libero justo laoreet sit amet cursus sit amet. Suscipit adipiscing bibendum est ultricies integer. Sit amet justo donec enim diam vulputate. Faucibus ornare suspendisse sed nisi lacus sed viverra tellus. Enim ut sem viverra aliquet. Diam vel quam elementum pulvinar etiam non quam. Tempor commodo ullamcorper a lacus vestibulum. At erat pellentesque adipiscing commodo elit at. Nisi est sit amet facilisis magna etiam tempor orci eu.</p>

        <p> Blandit volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque. Eget nunc scelerisque viverra mauris in aliquam sem. Gravida in fermentum et sollicitudin. Blandit cursus risus at ultrices mi tempus imperdiet nulla. Nec dui nunc mattis enim ut tellus elementum. Ut tristique et egestas quis ipsum. Proin sagittis nisl rhoncus mattis rhoncus urna. Ac orci phasellus egestas tellus. Bibendum at varius vel pharetra vel turpis nunc. Amet risus nullam eget felis. Id volutpat lacus laoreet non curabitur gravida arcu ac tortor. Sollicitudin nibh sit amet commodo. Felis eget velit aliquet sagittis id consectetur purus ut faucibus.</p>
        
        <p> Arcu vitae elementum curabitur vitae nunc sed. Faucibus et molestie ac feugiat sed. A condimentum vitae sapien pellentesque habitant morbi tristique senectus. Ultrices sagittis orci a scelerisque. Quam viverra orci sagittis eu volutpat odio facilisis mauris. Nisl nisi scelerisque eu ultrices vitae auctor eu augue. Tempus quam pellentesque nec nam aliquam. Sit amet nisl purus in mollis. Non diam phasellus vestibulum lorem sed risus ultricies. Etiam sit amet nisl purus. Elit eget gravida cum sociis. Turpis egestas integer eget aliquet. Vitae aliquet nec ullamcorper sit amet. Ipsum dolor sit amet consectetur. Pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus nisl. Dignissim cras tincidunt lobortis feugiat vivamus at augue eget. Diam sollicitudin tempor id eu nisl nunc mi ipsum.</p>
        
        <p> Volutpat lacus laoreet non curabitur gravida arcu ac. Nunc faucibus a pellentesque sit amet. Malesuada proin libero nunc consequat interdum. Sed vulputate mi sit amet mauris. Enim tortor at auctor urna. Augue lacus viverra vitae congue eu consequat ac felis. Tortor vitae purus faucibus ornare suspendisse. Eget dolor morbi non arcu risus quis varius quam quisque. Velit sed ullamcorper morbi tincidunt ornare massa eget egestas purus. Aenean pharetra magna ac placerat vestibulum.</p>
        
        <p>Aliquam sem et tortor consequat. Etiam non quam lacus suspendisse faucibus interdum posuere. Maecenas sed enim ut sem. Dapibus ultrices in iaculis nunc sed. Consectetur adipiscing elit ut aliquam purus sit amet. Pellentesque sit amet porttitor eget dolor morbi non arcu risus. Vulputate odio ut enim blandit volutpat maecenas volutpat. Urna nunc id cursus metus. Porta non pulvinar neque laoreet suspendisse interdum consectetur libero. Bibendum ut tristique et egestas quis. Mauris a diam maecenas sed enim ut. In vitae turpis massa sed elementum tempus egestas. Cursus vitae congue mauris rhoncus. Ultricies lacus sed turpis tincidunt id aliquet risus feugiat. Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Malesuada fames ac turpis egestas sed tempus urna et. Senectus et netus et malesuada fames ac turpis. Pellentesque eu tincidunt tortor aliquam.</p>

    <h2><strong>Nous contacter</strong></h2>
        <p> Si vous voulez contacter le comité de baptême ingénieur civil de liège, vous pouvez laisser un email sur comite@cbinge.com ou compléter le formulaire ci dessous :</p>
        <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-dark">
                        <div class="card-body">
                        <form method="POST" action="/contact" enctype="multipart/form-data">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nom et prénom</label>
        
                                    <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Enregistrer
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>




@endsection
