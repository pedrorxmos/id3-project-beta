import { ProductCard } from "../../components"

export const ProductList = ({type}) => {

  const products = ['', 'discount', '', '', '', '', '','discount', '', 'discount']

  return (
    <>
      <div className="container">
        <h2>Product List / {type} </h2>
        <div className="product-list">
          {products.map((prd) => 
            <ProductCard type={prd}/>
          )}

          <button className="btn btn-main">Load More</button>
        </div>
      </div>
      
    </>
  )
}