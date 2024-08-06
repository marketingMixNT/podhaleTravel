<main>
    <x-home.hero :categories="$this->categories" />
    <x-home.categories :categories="$this->categories" />
    <x-home.attractions :attractions="$this->attractions" />
    <x-shared.podhale />
    <x-home.blog :posts="$this->posts" />
</main>
