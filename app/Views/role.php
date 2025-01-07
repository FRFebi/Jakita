<?= $this->extend('baselayout') ?>

<?= $this->section('content') ?>
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4 text-black">Manage User Roles</h1>

    <!-- Flash Messages -->
    <?php if (session()->getFlashdata('message')): ?>
        <div class="bg-green-500 text-white p-2 mb-4"><?= session()->getFlashdata('message'); ?></div>
    <?php elseif (session()->getFlashdata('error')): ?>
        <div class="bg-red-500 text-white p-2 mb-4"><?= session()->getFlashdata('error'); ?></div>
    <?php endif; ?>

    <!-- User Table -->
    <table class="table-auto w-full bg-white rounded">
        <thead>
            <tr class="bg-black font-semibold">
                <th class="px-4 py-2 text-slate-200">ID</th>
                <th class="px-4 py-2 text-slate-200">Username</th>
                <th class="px-4 py-2 text-slate-200">Email</th>
                <th class="px-4 py-2 text-slate-200">Roles</th>
                <th class="px-4 py-2 text-slate-200">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr class="border-b">
                    <td class="px-4 py-2 text-black"><?= esc($user->id); ?></td>
                    <td class="px-4 py-2 text-black"><?= esc($user->username); ?></td>
                    <td class="px-4 py-2 text-black"><?= esc($user->email); ?></td>
                    <td class="px-4 py-2 text-black">
                        <?= implode(', ', $user->getGroups()); ?>
                    </td>
                    <td class="px-4 py-2">
                        <form method="POST" action="/role/updateRole" class="inline-block">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="user_id" value="<?= esc($user->id); ?>">
                            <select name="role" class="border-2 text-black border-black p-1">
                                <?php foreach ($groups as $group): ?>
                                    <option class="text-black" value="<?= esc($group); ?>"><?= esc($group); ?></option>
                                <?php endforeach; ?>
                            </select>
                            <button class="bg-blue-500 text-white px-2 py-1">Assign</button>
                        </form>

                        <form method="POST" action="/role/removeRole" class="inline-block">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="user_id" value="<?= esc($user->id); ?>">
                            <select name="role" class="text-black border-2 border-black p-1">
                                <?php foreach ($groups as $group): ?>
                                    <option class="text-black" value="<?= esc($group); ?>"><?= esc($group); ?></option>
                                <?php endforeach; ?>
                            </select>
                            <button class="bg-red-500 text-white px-2 py-1 rounded">Remove</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>