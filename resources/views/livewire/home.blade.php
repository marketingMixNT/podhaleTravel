<main>
    <x-home.hero :categories="$this->categories"/>
    <x-home.attractions :attractions="$this->attractions"/>
    <x-home.map />
    <x-home.blog :posts="$this->posts"/>
</main>
