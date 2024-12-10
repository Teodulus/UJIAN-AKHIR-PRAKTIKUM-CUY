@extends('layouts.app')

@section('content')
<div class="about-section" style="background-color: #ffcce1; padding: 40px 0;">
    <h1 class="text-center" style="color: #ee99c2; font-family: 'Arial', sans-serif; margin-bottom: 30px;">About Us</h1>
    <div class="team-members d-flex justify-content-center flex-wrap" style="background-color: #ee99c2; padding: 30px; border-radius: 15px;">
        <!-- Team Member 1 -->
        <div class="member text-center m-3 p-4" style="background-color: #ffcce1; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);">
            <img src="/images/teodulus.jpg" alt="Teodulus Vallent" class="rounded-circle" width="180" height="180" style="border: 4px solid #ee99c2;">
            <h2 class="mt-3" style="color: #333; font-family: 'Arial', sans-serif;">Teodulus Vallent</h2>
            <p style="color: #555; font-family: 'Arial', sans-serif;">Lead Developer with expertise in backend technologies and system architecture.</p>
        </div>
        <!-- Team Member 2 -->
        <div class="member text-center m-3 p-4" style="background-color: #ffcce1; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);">
            <img src="/images/azkia.jpg" alt="Azkia Aulia Barus" class="rounded-circle" width="180" height="180" style="border: 4px solid #ee99c2;">
            <h2 class="mt-3" style="color: #333; font-family: 'Arial', sans-serif;">Azkia Aulia Barus</h2>
            <p style="color: #555; font-family: 'Arial', sans-serif;">UI/UX Designer passionate about creating intuitive and aesthetic designs.</p>
        </div>
        <!-- Team Member 3 -->
        <div class="member text-center m-3 p-4" style="background-color: #ffcce1; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);">
            <img src="/images/stephanie.jpg" alt="Stephanie Marito" class="rounded-circle" width="180" height="180" style="border: 4px solid #ee99c2;">
            <h2 class="mt-3" style="color: #333; font-family: 'Arial', sans-serif;">Stephanie Marito</h2>
            <p style="color: #555; font-family: 'Arial', sans-serif;">Content Creator skilled in crafting engaging articles and social media content.</p>
        </div>
        <!-- Team Member 4 -->
        <div class="member text-center m-3 p-4" style="background-color: #ffcce1; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);">
            <img src="/images/kamilia.jpg" alt="Kamilia Luthfitah" class="rounded-circle" width="180" height="180" style="border: 4px solid #ee99c2;">
            <h2 class="mt-3" style="color: #333; font-family: 'Arial', sans-serif;">Kamilia Luthfitah</h2>
            <p style="color: #555; font-family: 'Arial', sans-serif;">Marketing Specialist with a focus on brand growth and digital campaigns.</p>
        </div>
    </div>
</div>
@endsection
