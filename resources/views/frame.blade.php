@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    Frame Page
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Accusamus architecto atque blanditiis, deserunt dignissimos eum
                    excepturi hic inventore iusto neque nulla, odit praesentium quis quo,
                    quos sapiente sed sit totam!
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Venobox Test
                </div>
                <div class="card-body">
                    <x-image gall="tzuyu" small="{{ asset('images/test/tone.jpeg') }}" style="height: 100px" />
                    <x-image gall="tzuyu" small="{{ asset('images/test/ttwo.jpeg') }}" style="height: 100px" />
                    <x-image gall="tzuyu" small="{{ asset('images/test/tthree.jpeg') }}" style="height: 100px" />
                    <x-image small="{{ asset('images/test/tfour.jpeg') }}" big="{{ asset('images/test/tfive.jpeg') }}" style="height: 100px" />
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Form Elements
                </div>
                <div class="card-body">

                    <form action="">

                        <x-input name="name" title="Your Name" value="Aung Paing Soe" />

                        <x-input name="password" type="password" title="Password" />

                        <x-input name="bd" title="Date of birth" type="date" />

                        <x-text-area title="Address" name="address" value="san kyi tar" rows="7" />

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
