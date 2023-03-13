export const ProductCard = ({type}) => {

  return (
    <>
      <div className="product-card">
        <a href="#product-detail">
          <img src="https://source.unsplash.com/random/200x250/?makeup%20product%20eyeshadow" alt="product image" />
        </a>
        
        <div className="product-info">
          <a href="#product-detail">
            <div className="product-info__info">
              <p className="product-info__category">
                Category
              </p>
              <p className="product-info__name">
                Product Name
              </p>
              <div className="product-info__price">
                99.99$ {(type === 'discount') ? <span>99.99$</span> : ''}
              </div>
            </div>
          </a>
          
          <button className="btn btn-secondary product-info__add-button">
            Add to bag
          </button>
        </div>
      </div>
    </>
  )
}