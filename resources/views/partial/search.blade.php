<div class="search flex">
    <div class="search-1">
        <form action="/{{ $active }}">
        <div class="search-box">
            <input type="text" name="search" class="search-txt" value="{{ request('search') }}" placeholder="Search">
            <button href="" type="submit" class="search-btn">
                <i class="fas fa-search"></i>
            </button>
        </div>
        </form>
    </div>
</div>

