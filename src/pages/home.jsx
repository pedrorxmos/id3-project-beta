import { HeroBanner, ProductSlider } from '../components'

export const Home = () => {

  return (
    <>
      <HeroBanner/>

      <ProductSlider title={'New releases'} subtitle={'Check out our new products'} />

      <HeroBanner/>
      
      <ProductSlider title={'Best Sellers'} subtitle={"check what's trending right now!"} />
    </>
  )
}