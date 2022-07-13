<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end d-flex" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="cartDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <div class="dropdown-menu cart-dropdown" aria-labelledby="cartDropdown">
                    <div class="cart-container">
                        <div class="cart-header"><h6>Cart (1 Item)</h6></div>
                        <div class="cart-card">
                            <div class="cart-item-image">
                                <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                            </div>
                            <div class="col cart-item-body">
                                <span class="cart-item-header">Spoon</span>
                                <span class="cart-item-quantity">Quantity:1</span>
                                <span class="cart-item-price">0.0023 <i class="fa-solid fa-bitcoin-sign"></i></span>
                            </div>
                            <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                        <div class="cart-button"><a href="/cart" class="btn btn-custom w-100">Go to Cart</a></div>
                    </div>
                </div>
                </li>
                <li class="nav-item dropdown" style="display:none">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>