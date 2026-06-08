<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <section class="h-screen flex items-center justify-center bg-gray-100 bg-no-repeat bg-cover">
        <div class="container 2xl:px-80 xl:px-52">
            <div class="bg-white rounded-lg p-5" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <div class="grid xl:grid-cols-5 lg:grid-cols-3 gap-6">
                    <div class="xl:col-span-3 lg:col-span-2 lg:mx-10 my-auto">
                        <div>
                            <h1 class="text-2xl/tight mb-3">Sign In</h1>
                            <p class="text-sm font-medium leading-relaxed">We are here to help you and we'd love to connect with you.</p>
                        </div>

                        <!-- Session Status -->
                        <x-auth-session-status class="mt-4" :status="session('status')" />

                        <form wire:submit="login" class="space-y-5 mt-10">
                            <!-- Email Address -->
                            <div>
                                <x-input-label class="font-medium text-sm block mb-2" for="email" :value="__('Email')" />
                                <x-text-input class="text-gray-500 border-gray-300 focus:ring-0 focus:border-gray-400 text-sm rounded-lg py-2.5 px-4 w-full"
                                              wire:model="form.email"
                                              type="email"
                                              id="email"
                                              name="email"
                                              required autofocus autocomplete="username"
                                              placeholder="Enter Your Email" />
                                <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div>
                                <div class="flex items-center justify-between mb-2">
                                    <x-input-label class="font-medium text-sm" for="password" :value="__('Password')" />
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" wire:navigate class="font-medium text-gray-500 text-sm">Forget your password?</a>
                                    @endif
                                </div>
                                <x-text-input class="text-gray-500 border-gray-300 focus:ring-0 focus:border-gray-400 text-sm rounded-lg py-2.5 px-4 w-full"
                                              wire:model="form.password"
                                              type="password"
                                              id="password"
                                              name="password"
                                              required autocomplete="current-password"
                                              placeholder="Enter Your Password" />
                                <x-input-error :messages="$errors->get('form.password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div>
                                <label for="remember" class="inline-flex items-center">
                                    <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex flex-wrap items-center justify-between gap-6 mt-8">
                                <button type="submit" class="bg-sky-600 text-white text-sm rounded-lg px-6 py-2.5">Sign In</button>
                                <p class="text-sm text-gray-500">Don't have an account? <a href="{{ route('register') }}" wire:navigate class="ms-2 underline text-sky-600">Sign Up</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>





