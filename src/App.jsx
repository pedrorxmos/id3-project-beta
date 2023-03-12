import { useState } from 'react'
import {createBrowserRouter, RouterProvider} from 'react-router-dom';
import { Header } from './components';
import { Home, ProductDetail, ProductList, AboutUs, Contact } from './pages';


function App() {
  const [count, setCount] = useState(0)

  const router = createBrowserRouter([
		{
			//import.meta.env.BASE_URL get the base from vite.config.js
			path: '',
			element: <Header />,
			children: [
				{
					path: '',
					element: <Home />,
				},
				{
					path: 'shop',
					element: <ProductList />,
				},
				{
					path: 'shop/singular',
					element: <ProductList type={'singular'}/>,
				},
				{
					path: 'shop/palettes',
					element: <ProductList type={'palettes'}/>,
				},
        {
					path: 'shop/detail',
					element: <ProductDetail />,
				},
        {
					path: 'about-us',
					element: <AboutUs />,
				},
        {
					path: 'Contact',
					element: <Contact />,
				}
			],
		},
	]);

  return (
    <>
      <RouterProvider router={router} />
    </>
  )
}

export default App
