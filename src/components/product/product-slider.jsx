import { ProductCard } from "../"

export const ProductSlider = ({title, subtitle}) => {

  return (
    <>
      <div className="product-slider">
        <div className="product-slider-title">
          <h2>{title}</h2>
          <h3>{subtitle}</h3>
        </div>

        <div className="product-slider-wrapper">
          <div className="product-items-slider">
            <ProductCard />
            <ProductCard type="discount"/>
            <ProductCard />
          </div>
          <div className="product-slider-bar">
            <div className="product-slider-bar-thumb"></div>
          </div>
        </div>
      </div>
    </>
  )
}