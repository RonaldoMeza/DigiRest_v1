<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <h1 class="text-4xl font-bold text-slate-500">Mis Pedidos</h1>
    <div class="flex flex-col bg-white p-5 rounded mt-4 shadow-lg">
        <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead>
                <tr>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Pedido</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Fecha</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Estado del pedido</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Estado del pago</th>
                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Monto total del pedido</th>
                    <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Acción</th>
                </tr>
                </thead>
                <tbody>
                
                    @foreach ($orders as $order)
                    @php
                        $status = '';
                        $payment_status = '';
                        if ($order->status == 'new') {
                            $status = 'Nuevo';
                        } elseif ($order->status == 'processing') {
                            $status = 'En Proceso';
                        } elseif ($order->status == 'shipped') {
                            $status = 'Enviado';
                        } elseif ($order->status == 'delivered') {
                            $status = 'Entregado';
                        } elseif ($order->status == 'canceled') {
                            $status = 'Cancelado';
                        }

                        if ($order->payment_status == 'pendiente') {
                            $payment_status = 'Pendiente';
                        } elseif ($order->payment_status == 'pagado') {
                            $payment_status = 'Pagado';
                        } elseif ($order->payment_status == 'fallado') {
                            $payment_status = 'Fallido';
                        } 

                    @endphp

                    <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-900 dark:even:bg-slate-800"
                        wire:key="{{ $order->id }}">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                            {{ $order->id }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                            {{ $order->created_at->format('d-m-Y') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                            <span class="bg-digirest py-1 px-3 rounded text-black shadow">{{ $status }}</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                            <span class="bg-digirest py-1 px-3 rounded text-black shadow">{{ $payment_status }}</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                            S/ {{ Number::format($order->grand_total, 2) }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                        <a href="/mis-pedidos/{{ $order->id }}" class="bg-slate-600 text-white py-2 px-4 rounded-md hover:bg-slate-500">Ver detalles</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            </div>
        </div>
        {{ $orders->links() }}
        </div>
    </div>
</div>